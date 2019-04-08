<?php
namespace App\Model\Database;

use PDO;

class Manager {

    private $pdo;


    /**
     * @return PDO Connection to the DB
     */
    public function getDB(){
        if ($this->pdo === null){
            $pdo = new PDO("mysql:host=localhost;dbname=p4_blog;charset=utf8", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $pdo;
    }
}