<?php


namespace App\controller;


use App\Model\Database\PostsManager;

class PostEditController{

    public function displayPostEdit () {
        require "view/admin/postEdit.php";
    }

    public function createPost () {
            if (($_POST['title'])) {
                $postsManager = new PostsManager();
                $postCreated = $postsManager->sendPost($_POST['title'],$_POST['post']);
                header('Location: index.php?p=post-edit');
                exit;
            } else {
                header('Location: index.php?p=post-edit');
                exit;
            }

        require "view/admin/postEdit.php";
    }

}