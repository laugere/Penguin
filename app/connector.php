<?php

namespace App;

class Connector
{
    // Properties
    private $serverName;
    private $userName;
    private $password;
    private $database;

    private $conection;

    public function __construct()
    {
        $this->serverName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->database = "penguin";

        // Create connection
        $this->conection = new \mysqli($this->serverName, $this->userName, $this->password, $this->database);

        // Check connection
        if ($this->conection->connect_error) {
            die("Connection failed: " . $this->conection->connect_error);
        }
    }

    public function getData($query): array
    {
        $rows = array();
        if ($response = mysqli_query($this->conection, $query)) {
            $rows = mysqli_fetch_all($response, MYSQLI_ASSOC);
        }
        return $rows;
    }
}
