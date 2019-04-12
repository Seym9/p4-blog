<?php
namespace App\controller;

use App\Model\Database\AuthManager;


class AuthController extends MainController {

    /**
     * login the user
     */
    public function login(){
        $error = false;

        if (isset($_POST['login']) && isset($_POST['pass'])){
            $authManager = new AuthManager();
            $user = $authManager->getAuth($_POST['login']);

            if($user != false){
                if (password_verify($_POST['pass'], $user->getPassword())){
                    $_SESSION['login'] = $user->getLogin();
                    $_SESSION['status'] = $user->getStatus();
                    $_SESSION['id'] = $user->getId();
                    header('Location: index.php?p=dashboard');
                }else{
                    $error = true;
                }
            }else{
                header('Location: index.php?p=login');
            }
        }
                $this->render(['page/login'], compact('error'));
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
