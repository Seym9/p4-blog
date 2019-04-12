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

    /**
     * @param $statement request to the DB
     * @return false|\PDOStatement
     */
    protected function query($statement){
        $this->query = $this->getDB()->query($statement);
        return $this->query;
    }

    /**
     * @param $statement request to the DB
     * @return bool|\PDOStatement
     */
    protected function prepare($statement){
        $this->prepare = $this->getDB()->prepare($statement);
        return $this->prepare;
    }
}