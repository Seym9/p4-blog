<?php
/**
 * Created by PhpStorm.
 * User: sey_9
 * Date: 12/03/2019
 * Time: 17:47
 */

namespace App\model\database;


class GetComments extends DataBase {

    public function sendComments ($author, $message, $id_post) {
        $dbConnect = $this->getDB();
        $sendComments = $dbConnect->prepare("
            INSERT INTO p4_comments(author, message, comment_date,id_post) 
            VALUES (?,?,NOW(),?)
        ");
        $sendComments->execute(array($author, $message, $id_post));
        $sentComments = $sendComments->fetchAll();

        return $sentComments;
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