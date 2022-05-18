<?php
namespace App\Classes;

class Db
{
    private $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "bookxchange";

        $this->conn = mysqli_connect($servername, $username, $password, $dbname);


    }

    public function getConnection()
    {

        return $this->conn;
    }
}


?>