<?php
define('ROOT', __DIR__);

require 'Autoloader.php';
use App\Autoloader;
use App\Controller\PostsController;
use App\Controller\CommentsController;

Autoloader::register();

if (isset($_GET['p'])) {

    if ($_GET['p'] === 'post') {
        $post = new PostsController();
        $post->displayPost();
    } elseif ($_GET['p'] === 'sendcomment'){
        $comment = new CommentsController();
        $comment->sendComment();
    }
} else {
    $posts = new PostsController();
    $posts->displayPostsList();
}
