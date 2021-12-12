<?php

namespace App\Object;

class Book
{
    // Properties
    private $id;
    private $title;
    private $authorId;

    function __construct($id, $title, $authorId)
    {
        $this->id = $id;
        $this->title = $title;
        $this->authorId = $authorId;
    }

    function getId(): string
    {
        return $this->id;
    }

    function getTitle(): string
    {
        return $this->title;
    }

    function getAuthorId(): string
    {
        return $this->authorId;
    }
}
