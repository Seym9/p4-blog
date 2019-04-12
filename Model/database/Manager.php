<?php
namespace App\Model\Database;

use PDO;

class Manager {

    private $query;
    private $prepare;
    /**
     * @return PDO Connection to the DB
     */
    protected function getDB(){
        $pdo = new PDO("mysql:host=localhost;dbname=p4_blog;charset=utf8", "root", "");
        return $pdo;
    }

    protected function query($statement){
        $this->query = $this->getDB()->query($statement);
        return $this->query;
    }

    protected function prepare($statement){
        $this->prepare = $this->getDB()->prepare($statement);
        return $this->prepare;
    }
}