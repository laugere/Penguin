<?php

namespace App\ClassController;

use App\Object\Book;
use App\Connector;

class BookController
{
    // Properties
    private $connector;

    function __construct()
    {
        $this->connector = new Connector();
    }

    function getBooks(): array
    {
        $books = array();
        $rows = $this->connector->getData('SELECT * FROM book');

        foreach ($rows as $row) {
            $book = new Book(
                $row['id'],
                $row['title'],
                $row['authorId']
            );
            array_push($books, $book);
        }

        return $books;
    }

    function getBook($id)
    {
        $book = null;
        $rows = $this->connector->getData('SELECT * FROM book WHERE id = \'' . $id . '\'');

        if (count($rows) == 1) {
            $row = array_shift($rows);
            $book = new Book(
                $row['id'],
                $row['title'],
                $row['authorId']
            );
        }

        return $book;
    }
}
