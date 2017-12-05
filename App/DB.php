<?php

class DB
{
    private $server;    
    private $username;
    private $password;
    private $database;

    private $connection;

    public function __construct($server="localhost", $username="root", $password="", $database="project"){

        $this->connection = new mysqli($server, $username, $password, $database);

        if($this->connection->connect_error) {

            die("Connection Failed: " . $conn->connect_error);
        }
    }

    public function getConnection(){

        return $this->connection;
    }

    public function __destruct(){
        
        $this->connection->close();
    }
    
}