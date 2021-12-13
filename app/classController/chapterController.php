<?php

namespace App\ClassController;

use App\Object\Chapter;
use App\Connector;

class ChapterController
{
    // Properties
    private $connector;

    function __construct()
    {
        $this->connector = new Connector();
    }

    function getChapterForBook($bookId)
    {
        $chapters = array();
        $rows = $this->connector->getData('SELECT * FROM chapter WHERE bookId = \'' . $bookId . '\'');

        foreach ($rows as $row)
        {
            $chapter = new Chapter(
                $row['id'],
                $row['bookId'],
                $row['title'],
                $row['content']
            );
            array_push($chapters, $chapter);
        }

        return $chapters;
    }
}
