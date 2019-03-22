<?php


namespace App\controller;


use App\Model\Database\PostsManager;

class PostEditController extends PostsController {

    public function displayPostEdit () {
        if (isset($_GET['id'])){
            $post = new PostsManager();
            $displayPost = $post->getPost($_GET['id']);
            require "view/admin/postAdmin.php";
        } else {
            echo '404';
        }
    }

    public function sendingPost () {
            if (($_POST['title'])) {
                $postsManager = new PostsManager();
                $postCreated = $postsManager->sendPost($_POST['title'],$_POST['post']);
                header('Location: index.php?p=post-edit');
                exit;
            } else {
                header('Location: index.php?p=post-edit');
                exit;
            }

        require "view/admin/postAdmin.php";
    }

    public function createPost(){
        require "view/admin/postAdmin.php";
    }

}