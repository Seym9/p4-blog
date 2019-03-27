<?php
namespace App\Controller;

use App\model\database\CommentsManager;

class CommentsController{

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

    public function reportComment() {

        $report = new CommentsManager();
        $report->reportComment($_GET['report_com']);
        header('Location: index.php');
        exit;
    }
}