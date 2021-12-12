<?php

namespace App\ClassController;

use App\Object\Author;
use App\Connector;

class AuthorController
{
    // Properties
    private $connector;

    function __construct()
    {
        $this->connector = new Connector();
    }

    function getAuthor($id)
    {
        $author = null;
        $rows = $this->connector->getData('SELECT * FROM author WHERE id = \'' . $id . '\'');

        if (count($rows) == 1) {
            $row = array_shift($rows);
            $author = new Author(
                $row['id'],
                $row['name'],
                $row['surname']
            );
        }

        return $author;
    }
}
