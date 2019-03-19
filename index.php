<?php
define('ROOT', __DIR__);

require 'Autoloader.php';
use App\Autoloader;
use App\Controller\PostsController;
use App\Controller\CommentsController;
use App\Controller\PostEditController;

Autoloader::register();

if (isset($_GET['p'])) {

    if ($_GET['p'] === 'post') {
        $post = new PostsController();
        $post->displayPost();
    } elseif ($_GET['p'] === 'sendcomment'){
        $comment = new CommentsController();
        $comment->sendComment();
    }elseif ($_GET['p'] === 'post-edit'){
        $postEdit = new PostEditController();
        $postEdit->createPost();
    }
} else {
    $posts = new PostsController();
    $posts->displayPostsList();
}
