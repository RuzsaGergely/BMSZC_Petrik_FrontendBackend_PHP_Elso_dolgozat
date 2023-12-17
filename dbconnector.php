<?php

class DatabaseHandler
{
    public $connection;
   
    public function Init() {
        $this->connection = new mysqli("localhost", "root", "", "php_elso_dolgozat");

         // Check connection
        if ($this->connection->connect_error) {
            die("Sikertelen adatbázis-kapcsolódás: " . $this->connection->connect_error);
        }

        $utfstmt = $this->connection->prepare("SET NAMES 'utf8'");
        $utfstmt->execute();
    }

    public function Close(){
        $this->connection->Close();
    }

    public function GetToys() {
        $statement = $this->connection->prepare("SELECT * FROM jatekok");
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function InsertToy($megnevezes, $raktarkeszlet, $forgkezd, $eukomp, $tipus) {
        $statement = $this->connection->prepare("INSERT INTO `jatekok`(`megnevezes`, `raktarkeszlet`, `forgkezd`, `eukomp`, `tipus`) VALUES (?,?,?,?,?)");
        $statement->bind_param("sisis", $megnevezes, $raktarkeszlet, $forgkezd, $eukomp, $tipus);
        $statement->execute();
    }


}