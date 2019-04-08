<?php
namespace App\controller;

use App\Model\Database\AuthManager;

class AuthController {

    /**
     * Display the login page
     */
    public function loginPage(){
        require "view/page/login.php";
    }

    /**
     * login the user
     */
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

    /**
     * logout the user
     */
    public function logout() {
        $_SESSION = [];
        session_destroy();

        header('Location: index.php');
        exit;
    }
}
