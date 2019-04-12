<?php

require_once 'Autoloader.php';
use App\Autoloader;
use App\controller\AuthController;
use App\controller\PostsController;
use App\controller\CommentsController;
use App\controller\PostEditController;
Autoloader::register();
session_start();


if (isset($_GET['p']) && !empty($_GET['p'])) {
    if ($_GET['p'] === 'post') {
        $post = new PostsController();
        $post->post();
    } elseif ($_GET['p'] === 'sendcomment'){
        $comment = new CommentsController();
        $comment->sendComment();
    } elseif ($_GET['p'] === 'login'){
        $login = new AuthController();
        $login->login();
    }elseif ($_GET['p'] === 'logout'){
        $login = new AuthController();
        $login->logout();
    }elseif ($_GET['p'] === 'report'){
        $postEdit = new CommentsController();
        $postEdit->reportComment();
    }elseif ($_GET['p'] === 'post-list'){
        $postEdit = new PostsController();
        $postEdit->postsList();
    }elseif ($_GET['p'] === 'dashboard'){
        $post = new PostsController();
        $post->dashboardPost();
    }elseif ($_GET['p'] === 'dashboard-comments' && ($_SESSION['status'] === 'admin')){
        $post = new CommentsController();
        $post->dashboardComment();
    }elseif ($_GET['p'] === 'post-send' && ($_SESSION['status'] === 'admin')){
        $postEdit = new PostsController();
        $postEdit->sendingPost();
    }elseif ($_GET['p'] === 'post-edit' && ($_SESSION['status'] === 'admin')){
        $postEdit = new PostsController();
        $postEdit->postEdit();
    }elseif ($_GET['p'] === 'post-creation' && ($_SESSION['status'] === 'admin')){
        $postEdit = new PostsController();
        $postEdit->createPost();
    }elseif ($_GET['p'] === 'post-edited' && ($_SESSION['status'] === 'admin')){
        $postEdit = new PostsController();
        $postEdit->updatePost();
    }elseif ($_GET['p'] === 'post-delete' && ($_SESSION['status'] === 'admin')){
        $postEdit = new PostsController();
        $postEdit->deletePost();
    }elseif ($_GET['p'] === 'post-admin' && ($_SESSION['status'] === 'admin')){
        $postEdit = new PostsController();
        $postEdit->PostAdmin();
    }elseif ($_GET['p'] === 'delete-com' && ($_SESSION['status'] === 'admin')){
        $postEdit = new CommentsController();
        $postEdit->deleteComment();
    }
} else {
    $posts = new PostsController();
    $posts->postHome();
}

