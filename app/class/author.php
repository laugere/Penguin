<?php

namespace App\Object;

class Author
{
    // Properties
    private $id;
    private $name;
    private $surname;

    function __construct($id, $name, $surname)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
    }

    function toArray()
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'surname' => $this->surname
        );
    }

    function getId(): string
    {
        return $this->id;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getSurname(): string
    {
        return $this->surname;
    }
}
