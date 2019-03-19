<?php

namespace App\Controller;


use App\model\database\GetComments;

class CommentsController{

    public function sendComment () {

        if (isset($_get['id_post'])){

            if (preg_match('#^[A-Za-z]{1}[a-z0-9]{3,}$#', $_POST['author']) === 1 ){
                die('test');
                $comment = new GetComments();
                $addComment = $comment->sendComments($_POST['author'], $_POST['message'], $_GET['id_post']);

                header("Location: index.php?p=post&id={$_GET['id_post']}");
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
}