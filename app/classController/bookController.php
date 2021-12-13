<?php

namespace App\ClassController;

use App\Object\Book;
use App\Connector;
use App\ClassController\AuthorController;

class BookController
{
    // Properties
    private $connector;
    private $authorController;
    private $chapterController;

    function __construct()
    {
        $this->connector = new Connector();
        $this->authorController = new AuthorController();
        $this->chapterController = new ChapterController();
    }

    function getBooks(): array
    {
        $books = array();
        $rows = $this->connector->getData('SELECT * FROM book');

        foreach ($rows as $row)
        {
            $book = new Book(
                $row['id'],
                $row['title'],
                $this->authorController->getAuthor($row['authorId']),
                $row['cover'],
                $row['synopsis'],
                $this->chapterController->getChapterForBook($row['id'])
            );
            array_push($books, $book);
        }

        return $books;
    }

    function getBook($id)
    {
        $book = null;
        $rows = $this->connector->getData('SELECT * FROM book WHERE id = \'' . $id . '\'');

        if (count($rows) == 1)
        {
            $row = array_shift($rows);
            $book = new Book(
                $row['id'],
                $row['title'],
                $this->authorController->getAuthor($row['authorId']),
                $row['cover'],
                $row['synopsis'],
                $this->chapterController->getChapterForBook($row['id'])
            );
        }

        return $book;
    }
}
