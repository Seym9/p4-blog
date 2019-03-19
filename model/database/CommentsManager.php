<?php

namespace App\model\database;


class CommentsManager extends Manager {

    public function sendComments ($author, $message, $id_post) {
        $dbConnect = $this->getDB();
        $sendComments = $dbConnect->prepare("
            INSERT INTO p4_comments(author, message, comment_date,id_post) 
            VALUES (?,?,NOW(),?)
        ");
        $sendComments->execute(array($author, $message, $id_post));

       // $count = $sendComments->rowCount();
    }

    public function getCommentsList($id_post) {
        $dbConnect = $this->getDB();
        $request = $dbConnect->prepare("
            SELECT id, author, message, id_post, DATE_FORMAT(comment_date, '%d/%m/%Y') as date_fr
            FROM p4_comments
            ORDER BY comment_date DESC
        ");
        $request->execute(array($id_post));
        $commentsList = $request->fetchAll();
        return $commentsList;
    }



}