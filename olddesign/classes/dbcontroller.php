<?php
require 'Medoo.php';
// Using Medoo namespace
use Medoo\Medoo;

class DBСontroller
{
    public Medoo $database;

    function __construct() {
        $this->database = new Medoo([
            'type' => 'mariadb',
            'host' => 'localhost',
            'database' => 'khordb',
            'username' => 'medoo',
            'password' => 'ZQutY1IlFpgvEa0L',
        ]);
    }

    public function сonnectToDB()
    {

    }
}