<?php
namespace App\Model\Database;

use App\Model\Comment;

class CommentsManager extends Manager {

    /**
     * @param $author for the author in the DB
     * @param $message for the message in the DB
     * @param $id_post for the id reference in the DB
     */
    public function sendComments ($author, $message, $id_post) {
        $dbConnect = $this->getDB();
        $sendComments = $dbConnect->prepare("
            INSERT INTO p4_comments(author, message, comment_date,id_post) 
            VALUES (?,?,NOW(),?)
        ");
        $sendComments->execute(array($author, $message, $id_post));
    }

    /**
     * @param $id_post for the id reference in the DB
     * @return Comment[]
     */
    public function getComments($id_post) {
        $dbConnect = $this->getDB();
        $request = $dbConnect->prepare("
            SELECT comment_id, author, message, id_post, comment_date
            FROM p4_comments
            WHERE id_post = ?
            ORDER BY comment_date DESC
        ");
        $request->execute([$id_post]);
        $comments = [];
        while ($array = $request->fetch()){
            $commentFeatures = [
                'id' => $array['comment_id'],
                'author' => $array['author'],
                'message' => $array['message'],
                'idPost' => $array['id_post'],
                'commentDate' => $array['comment_date']
            ];
            $comments[] = new Comment($commentFeatures);
        }
        return $comments;
    }

    /**
     * @param $comment_id for the id reference in the DB
     */
    public function deleteComments($comment_id) {
        $dbConnect = $this->getDB();
        $deletePost = $dbConnect->prepare('DELETE FROM p4_comments WHERE id = ?');
        $deletePost->execute(array($comment_id));
    }

    /**
     * @param $comment_id for the id reference in the DB
     */
    public function reportComment($comment_id) {

        $dbConnect = $this->getDB();
        $reportComment = $dbConnect->prepare("
            UPDATE p4_comments
            SET report = report + 1
            WHERE id = ?
        ");
        $reportComment->execute(array($comment_id));
    }

    /**
     * @param $id_post for the id reference in the DB
     * @return mixed
     */
    public function getNbPostComments($id_post) {
        $dbConnect = $this->getDB();
        $nbOfComment = $dbConnect->prepare("
                SELECT COUNT(*) AS nb_comment 
                FROM p4_comments 
                WHERE id_post = ?
                ");
        $nbOfComment->execute([$id_post]);
        $nbComments = $nbOfComment->fetch();

        return $nbComments;
    }


    /**
     * @return Comment[]
     */
    public function getCommentsListDashboard() {
        $dbConnect = $this->getDB();
        $request = $dbConnect->query("
            SELECT comment_id, author, message, id_post, report, comment_date
            FROM p4_comments
            ORDER BY report DESC
        ");
        $request->execute();
        $comments = [];
        while ($comment = $request->fetch()){
            $commentFeatures = [
                'id' => $comment['comment_id'],
                'author' => $comment['author'],
                'message' => $comment['message'],
                'idPost' => $comment['id_post'],
                'commentDate' => $comment['comment_date'],
                'report' => $comment['report']
            ];
            $comments[] = new Comment($commentFeatures);
        }
        return $comments;
    }
}