<?php

namespace App\controller;


use App\model\database\AuthManager;

class AuthController {

    public function login(){
        if (isset($_POST['login']) && isset($_POST['pass'])){
            $startAuth = new AuthManager();
            $verifAuth = $startAuth->getAuth($_POST['login']);

            if (password_verify($_POST['pass'], $verifAuth['pass'])){
                $_SESSION['login'] = $verifAuth;
                header('Location: view/admin/dashboard.php');
            }
        }else{
            echo 'error';
        }
        require "view/page/login.php";
    }
}
