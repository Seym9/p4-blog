<?php

namespace App\Model\Database;

use App\Model\User;

class AuthManager extends Manager {

    /**
     * @param $login for the login reference in the DB
     * @return mixed
     */
    public function getAuth($login) {
        $request = $this->prepare("
            SELECT user_id, login, username,  pass, user_status
            FROM p4_users
            WHERE login = ?
       ");

        $request->execute([$login]);
        $userArray = $request->fetch();

        if ($userArray != false) {

            $userFeatures = [
                'id' => $userArray['user_id'],
                'login' => $userArray['login'],
                'username' => $userArray['username'],
                'password' => $userArray['pass'],
                'status' => $userArray['user_status']
            ];
            $user = new User($userFeatures);
            return $user;
        }else{
            return false;
        }
    }
}

