<?php

namespace App\Object;

class Chapter
{
    // Properties
    private $id;
    private $bookId;
    private $title;
    private $content;

    function __construct($id, $bookId, $title, $content)
    {
        $this->id = $id;
        $this->bookId = $bookId;
        $this->title = $title;
        $this->content = $content;
    }

    function toArray()
    {
        return array(
            'id' => $this->id,
            'bookId' => $this->bookId,
            'title' => $this->title,
            'content' => $this->content
        );
    }
}
