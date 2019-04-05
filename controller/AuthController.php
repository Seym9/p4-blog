<?php
namespace App\controller;

use App\Model\Database\AuthManager;

class AuthController {

    public function loginPage(){
        require "view/page/login.php";
    }

    public function login(){
        if (isset($_POST['login']) && isset($_POST['pass'])){
            $startAuth = new AuthManager();
            $verifAuth = $startAuth->getAuth($_POST['login']);

            if (password_verify($_POST['pass'], $verifAuth['pass'])){
                echo ($_POST);

                $_SESSION['login'] = $verifAuth;
                header('Location: index.php?p=dashboard');
            }
        }else{
            echo 'error';
        }
    }

    public function logout() {
        $_SESSION = [];
        session_destroy();

        header('Location: index.php');
        exit;
    }
}
