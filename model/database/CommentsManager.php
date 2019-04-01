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

    public function deleteComments($comment_id) {
        $dbConnect = $this->getDB();
        $deletePost = $dbConnect->prepare('DELETE FROM p4_comments WHERE id = ?');
        $deletePost->execute(array($comment_id));
    }

    public function reportComment ($comment_id) {
        $dbConnect = $this->getDB();
        $reportComment = $dbConnect->prepare("
            UPDATE p4_comments 
            SET report = report + 1
            WHERE id = ?
        ");
        $reportComment->execute(array($comment_id));
    }
    public function commentNumber($id_post) {
        $db = $this->getDB();
        $q = $db->prepare('SELECT COUNT(*) AS nb_comments FROM p4_comments WHERE id_post = ?');
        $q->execute([$id_post]);
        $nbOfComments = $q->fetch();

        return $nbOfComments;
    }
    public function getCommentsListDashboard() {
        $dbConnect = $this->getDB();
        $request = $dbConnect->query("
            SELECT id, author, message, id_post, report, DATE_FORMAT(comment_date, '%d/%m/%Y') as date_fr
            FROM p4_comments
            ORDER BY report DESC
        ");
        $commentsListDash = $request->fetchAll();
        return $commentsListDash;
    }
}