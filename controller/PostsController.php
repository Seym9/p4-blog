<?php
namespace App\controller;

use App\Model\Database\CommentsManager;
use App\Model\Database\PostsManager;

class PostsController extends MainController {

    public function displayPostsList() {
        $postsList = new PostsManager();
        $displayList = $postsList->getPostsList();
        $this->render(['page/postList'], compact('displayList'));
    }

    public function displayPostsListHome() {
        $postsList = new PostsManager();
        $displayList = $postsList->getPostsListHome();
        $this->render(['page/home'], compact('displayList'));
    }

    public function displayPost(){

        if (isset($_GET['id'])){

            $postManager = new PostsManager();
            $commentManager = new CommentsManager();
            $post = $postManager->getPost($_GET['id']);
            $comments = $commentManager->getComments($_GET['id']);

            $this->render(['page/post'], compact('post','comments' ));

            //require "view/page/post.php";
        } else {
            echo '404';
        }
    }
    public function displayPostsListAdmin() {
        $postsList = new PostsManager();
        $displayList = $postsList->getPostsList();
        require "view/admin/dashboard.php";
    }



}