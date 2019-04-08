<?php

namespace App\Model\Database;

class AuthManager extends Manager {

    /**
     * @param $login for the login reference in the DB
     * @return mixed
     */
    public function getAuth($login){
       $dbConnect = $this->getDB();
       $request = $dbConnect->prepare("
            SELECT user_id, login, username,  pass, user_status
            FROM p4_users
            WHERE login = ?
       ");
       $request->execute(array($login));
       $user = $request->fetch();
       return $user;
   }
}