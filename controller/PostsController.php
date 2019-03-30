<?php
namespace App\Controller;

use App\model\database\CommentsManager;
use App\Model\Database\PostsManager;

class PostsController {

    public function displayPostsList() {
        $postsList = new PostsManager();
        $displayList = $postsList->getPostsList();
        require "view/page/home.php";
    }

    public function displayPostsListHome() {
        $postsList = new PostsManager();
        $displayList = $postsList->getPostsListHome();
        require "view/page/home.php";
    }

    public function displayPost(){

        if (isset($_GET['id'])){
            $post = new PostsManager();
            $comments = new CommentsManager();
            $displayPost = $post->getPost($_GET['id']);
            $displayComments = $comments->getCommentsList($_GET['id']);
            require "view/page/post.php";
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