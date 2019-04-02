<?php

namespace App\Model\Database;

class AuthManager extends Manager {

   public function getAuth($login){
       $dbConnect = $this->getDB();
       $request = $dbConnect->prepare("
            SELECT id, login, username,  pass, user_status
            FROM p4_users
            WHERE login = ?
       ");
       echo "après log" . '<br>';
       $request->execute(array($login));
       $user = $request->fetch();
       return $user;
   }
}