<?php
namespace App\Model\Database;

use PDO;

class Manager {
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name = 'p4_blog' , $db_user = 'root', $db_pass = '', $db_host = 'localhost') {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getDB(){
        if ($this->pdo === null){
            $pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8", "$this->db_user", "$this->db_pass");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $pdo;
    }
}