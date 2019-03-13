<?php
define('ROOT', __DIR__);

require 'Autoloader.php';
use App\Autoloader;
use App\Controller\PostsController;

Autoloader::register();

if (isset($_GET['id'])) {
        $post = new PostsController();
        $post->setPost($_GET['id']);
} else {
    $posts = new PostsController();
    $posts->setPostsList();
}
