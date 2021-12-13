<?php

namespace App\Object;

class Chapter
{
    // Properties
    private $id;
    private $bookId;
    private $order;
    private $title;
    private $content;

    function __construct($id, $bookId, $order, $title, $content)
    {
        $this->id = $id;
        $this->bookId = $bookId;
        $this->order = $order;
        $this->title = $title;
        $this->content = $content;
    }

    function toArray()
    {
        return array(
            'id' => $this->id,
            'bookId' => $this->bookId,
            'order' => $this->order,
            'title' => $this->title,
            'content' => $this->content
        );
    }
}
