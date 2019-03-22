<?php

namespace App\model\database;

class AuthManager extends Manager {

   public function getAuth($login){
       $dbConnect = $this->getDB();
       $request = $dbConnect->prepare("
            SELECT id, login, username,  pass, user_status
            FROM p4_users
            WHERE login = ?
       ");
       $request->execute(array($login));
       $user = $request->fetch();
       return $user;
   }
}