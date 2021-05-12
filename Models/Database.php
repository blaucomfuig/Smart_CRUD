<?php

class Database {

    public $mysql;

    public function __construct() {
        try {
            $this->mysql = $this->getConnection();
            echo "Conectada !";
           
        } catch (PDOException $ex) {
            echo "Oops ! Could'nt load your data" . $ex->getMessage();
            die();
        }
    }

    private function getConnection() {

        $link = "mysql:host=localhost;dbname=active_recall";
        $user = "root";
        $pass = "";
        $pdo = new PDO($link, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}






