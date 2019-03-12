<?php
define('ROOT', __DIR__);

require 'Autoloader.php';
use App\Autoloader;
use App\Controller\PostsController;

Autoloader::register();

if (isset($_GET['post_id'])) {
    $page = $_GET['post_id'];
} else {
    $page = 'home';
}

if ($page === 'home') {
    $posts = new PostsController();
    $posts->setPostsList();
} //elseif ($page === 'post')