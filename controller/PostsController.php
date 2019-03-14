<?php
namespace App\Controller;

use App\Model\Database\GetPosts;

class PostsController {

    public function displayPostsList() {
        $postsList = new GetPosts();
        $displayList = $postsList->getPostsList();
        require "view/page/home.php";
    }

    public function displayPost(){
        if (isset($_GET['id'])){
            $post = new GetPosts();
            $displayPost = $post->getPost($_GET['id']);
            require "view/page/post.php";
        } else {
            echo '404';
        }

    }
}