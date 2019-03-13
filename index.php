<?php
define('ROOT', __DIR__);

require 'Autoloader.php';
use App\Autoloader;
use App\Controller\PostsController;

Autoloader::register();

if ($_GET['p'] === 'post') {
        $post = new PostsController();
        $post->displayPost(htmlentities($_GET['id']));
} else {
    $posts = new PostsController();
    $posts->displayPostsList();
}
