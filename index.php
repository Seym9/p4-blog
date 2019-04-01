<?php
define('ROOT', __DIR__);

require 'Autoloader.php';
use App\Autoloader;
use App\controller\AuthController;
use App\controller\DashboardController;
use App\Controller\PostsController;
use App\Controller\CommentsController;
use App\Controller\PostEditController;

Autoloader::register();

session_start();

if (isset($_GET['p'])) {

    if ($_GET['p'] === 'post') {
        $post = new PostsController();
        $post->displayPost();
    } elseif ($_GET['p'] === 'sendcomment'){
        $comment = new CommentsController();
        $comment->sendComment();
    }elseif ($_GET['p'] === 'login-page'){
        $login = new AuthController();
        $login->loginPage();
    }elseif ($_GET['p'] === 'login'){
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
        $postEdit->displayPostsList();
    }elseif ($_GET['p'] === 'dashboard' && ($_SESSION['login']['user_status'] === 'admin')){
        $post = new DashboardController();
        $post->dashboardPost();
    }elseif ($_GET['p'] === 'post-send' && ($_SESSION['login']['user_status'] === 'admin')){
        $postEdit = new PostEditController();
        $postEdit->sendingPost();
    }elseif ($_GET['p'] === 'post-edit' && ($_SESSION['login']['user_status'] === 'admin')){
        $postEdit = new PostEditController();
        $postEdit->displayPostEdit();
    }elseif ($_GET['p'] === 'post-creation' && ($_SESSION['login']['user_status'] === 'admin')){
        $postEdit = new PostEditController();
        $postEdit->createPost();
    }elseif ($_GET['p'] === 'post-edited' && ($_SESSION['login']['user_status'] === 'admin')){
        $postEdit = new PostEditController();
        $postEdit->updatePost();
    }elseif ($_GET['p'] === 'post-delete' && ($_SESSION['login']['user_status'] === 'admin')){
        $postEdit = new PostEditController();
        $postEdit->deletePost();
    }elseif ($_GET['p'] === 'post-admin' && ($_SESSION['login']['user_status'] === 'admin')){
        $postEdit = new PostEditController();
        $postEdit->postAdmin();
    }elseif ($_GET['p'] === 'delete-com' && ($_SESSION['login']['user_status'] === 'admin')){
        $postEdit = new PostEditController();
        $postEdit->deleteComment();
    }
} else {
    $posts = new PostsController();
    $posts->displayPostsListHome();
}