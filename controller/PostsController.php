<?php
namespace App\controller;

use App\Model\Database\CommentsManager;
use App\Model\Database\PostsManager;

class PostsController extends MainController {

    /**
     * Display the list of all articles
     */
    public function displayPostsList() {
        $postsList = new PostsManager();
        $displayList = $postsList->getPostsList();
        $this->render(['page/postList'], compact('displayList'));
    }

    /**
     * Display the last article on the home page
     */
    public function displayPostsListHome() {
        $postsList = new PostsManager();
        $post = $postsList->getPostsListHome();
        $this->render(['page/home'], compact('post'));
    }

    /**
     * Display the all post on the specific page with comments below
     */
    public function displayPost(){

        if (isset($_GET['id'])){

            $postManager = new PostsManager();
            $commentManager = new CommentsManager();
            $post = $postManager->getPost($_GET['id']);
            $comments = $commentManager->getComments($_GET['id']);

            $this->render(['page/post'], compact('post','comments' ));
        } else {
            echo '404';
        }
    }
}