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
    private $chapters;

    function __construct($id, $title, $author, $cover, $synopsis, $chapters)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->cover = $cover;
        $this->synopsis = $synopsis;
        $this->chapters = $chapters;
    }

    function toArray()
    {
        return array(
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author->toArray(),
            'cover' => $this->cover,
            'synopsis' => $this->synopsis,
            'chapters' => $this->getChapterArray()
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

    function getChapterArray()
    {
        $chapters = array();

        foreach ($this->chapters as $chapter)
        {
            array_push($chapters, $chapter->toArray());
        }

        return $chapters;
    }
}
