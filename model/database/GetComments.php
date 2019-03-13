<?php
/**
 * Created by PhpStorm.
 * User: sey_9
 * Date: 12/03/2019
 * Time: 17:47
 */

namespace App\model\database;


class GetComments extends DataBase {



    public function getCommentsList() {
        $dbConnect = $this->getDB();
        $request = $dbConnect->prepare("
            SELECT id, author, message, DATE_FORMAT(comment_date, '%d/%m/%Y') as date_fr
            FROM p4_comments
            ORDER BY comment_date DESC
            ");
        $commentsList = $request->fetchAll();
        return $commentsList;
    }
}