<?php

namespace App\Object;

class Book
{
    // Properties
    private $id;
    private $title;
    private $author;
    private $cover;
    private $synopsis;

    function __construct($id, $title, $author, $cover, $synopsis)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->cover = $cover;
        $this->synopsis = $synopsis;
    }

    function toArray()
    {
        return array(
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author->toArray(),
            'cover' => $this->cover,
            'synopsis' => $this->synopsis
        );
    }

    function getId()
    {
        return $this->id;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getCover()
    {
        return $this->cover;
    }

    function getSynopsis()
    {
        return $this->synopsis;
    }
}
