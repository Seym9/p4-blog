<?php
namespace App\controller;

use App\model\database\CommentsManager;
use App\Model\Database\PostsManager;

class PostEditController extends PostsController {

    public function displayPostEdit () {
        if (isset($_GET['id'])){
            $post = new PostsManager();
            $displayPost = $post->getPost($_GET['id']);
            require "view/admin/postModification.php";
        } else {
            echo '404';
        }
    }

    public function sendingPost () {
            if (isset($_POST['title'])) {
                $postsManager = new PostsManager();
                $postCreated = $postsManager->sendPost($_POST['title'],$_POST['post']);
                header('Location: index.php?p=dashboard');
                exit;
            } else {
                header('Location: index.php?p=post-edit');
                exit;
            }
    }

    public function createPost(){
        require "view/admin/postModification.php";
    }

    public function postAdmin(){
        if (isset($_GET['id'])){
            $post = new PostsManager();
            $comments = new CommentsManager();
            $displayPost = $post->getPost($_GET['id']);
            $displayComments = $comments->getCommentsList($_GET['id']);
            require "view/admin/postAdmin.php";
        } else {
            echo '404';
        }
    }

    public function deleteComment(){
        $comments = new CommentsManager();
        $comments->deleteComments($_GET['id_com']);
        echo json_encode('success');
    }

    public function updatePost() {
        if (isset($_POST['title'])){
            $postManager = new PostsManager();
            $updatePost = $postManager->updatePost($_POST['title'],$_POST['post'],$_GET['id']);
            header('Location: index.php?p=dashboard');
            exit;
        } else {
            header('Location: index.php?p=post-edit');
            exit;
        }
    }

    public function deletePost() {
        if (isset($_GET['id'])){
            $postManager = new PostsManager();
            $postManager->deletePost($_GET['id']);
            echo json_encode('success');

            //header('Location: index.php?p=dashboard');
            //exit;
        }
    }


}