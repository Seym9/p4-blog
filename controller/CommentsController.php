<?php
namespace App\controller;

use App\Model\Database\CommentsManager;

class CommentsController{

    /**
     * send the comment to the DB
     */
    public function sendComment () {
        if (isset($_GET['id_post'])){
            if (preg_match('#^[A-Za-z]{1}[a-z0-9]{3,}$#', $_POST['author']) == 1 ){
                $comment = new CommentsManager();
                $comment->sendComments($_POST['author'], $_POST['comment'], $_GET['id_post']);

                header('Location: index.php?p=post&id=' . $_GET['id_post']);
                exit;
            }else {
                header('Location: index.php?p=post&id=' . $_GET['id_post']);
                exit;
            }
        } else {
            header('Location: index.php?p=post&id=' . $_GET['id_post']);
            exit;
        }
    }

    /**
     * Add +1 to the report column in the DB
     */
    public function reportComment() {

        if (isset($_GET["id_post"])){
            $report = new CommentsManager();
            $report->reportComment($_GET['report_com']);
            //echo json_encode('success');
        }

        header('Location: index.php?p=post&id=' . $_GET['id_post']);
        exit;
    }
}