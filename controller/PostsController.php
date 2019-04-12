<?php
namespace App\controller;

use App\Model\Database\CommentsManager;
use App\Model\Database\PostsManager;

class PostsController extends MainController {

    /**
     * Display the list of all articles
     */
    public function postsList() {
        $postsList = new PostsManager();
        $displayList = $postsList->getPostsList();

        $pageTitle = "Tout les articles";
        $this->render(['page/postList'], compact('displayList', 'pageTitle'));
    }

    /**
     * Display the last article on the home page
     */
    public function postHome() {
        $postsList = new PostsManager();
        $post = $postsList->getPostsListHome();
        $pageTitle = "Mon blog";
        $this->render(['page/home'], compact('post', 'pageTitle'));
    }

    /**
     * Display the all post on the specific page with comments below
     */
    public function post(){

        if (isset($_GET['id']) && !empty($_GET['id'])){
            $postManager = new PostsManager();
            $check = $postManager->idCheck($_GET['id']);
            $pageTitle = "Article";

            if ($check == 1){
                $post = $postManager->getPost($_GET['id']);
                $commentManager = new CommentsManager();
                $comments = $commentManager->getComments($_GET['id']);

                $this->render(['page/post'], compact('post','comments' , 'pageTitle'));
            }else{
                header('HTTP/1.0 404 Not Found');
            }
        } else {
            header('Location: index.php');
        }
    }

    /**
     * Display the article in the admin page
     */
    public function dashboardPost() {
        if ($_SESSION['status'] === 'admin'){
            $postsList = new PostsManager();
            $displayList = $postsList->getPostsList();
            $pageTitle = "Administration article";

            $this->render(['admin/dashboard'], compact('displayList', 'pageTitle'));
        }else{
            header('Location: index.php');
            exit;
        }
    }

    /**
     * View to edit articles
     */
    public function postEdit () {
        if (isset($_GET['id'])){
            $postManager = new PostsManager();
            $post = $postManager->getPost($_GET['id']);
            $pageTitle = "Edition d'article";

            $this->render(['admin/postModification'], compact('post', 'pageTitle'));
        } else {
            echo '404';
        }
    }

    /**
     * Send article to the DB
     */
    public function sendingPost () {
        if (isset($_POST['title'])) {
            $postsManager = new PostsManager();
            $postCreated = $postsManager->sendPost($_POST['title'],$_POST['post-edit'], $_SESSION['id']);
            header('Location: index.php?p=dashboard');
            exit;
        } else {
            header('Location: index.php?p=post-edit');
            exit;
        }
    }

    /**
     * Creation of article
     */
    public function createPost(){
        $pageTitle = "Création d'article";

        $this->render(['admin/postModification'], compact('pageTitle'));
    }

    /**
     * Specific view to read a article and comment as admin
     */
    public function PostAdmin(){

        if (htmlentities(isset($_GET['id']))){
            $postManager = new PostsManager();
            $commentManager = new CommentsManager();
            $post = $postManager->getPost($_GET['id']);
            $comments = $commentManager->getComments($_GET['id']);
            $pageTitle = "Article";

            $this->render(['admin/postAdmin'], compact('post','comments', 'pageTitle'));
        } else {
            echo '404';
        }
    }

    /**
     * Update article after editing
     */
    public function updatePost() {
        if (htmlentities(isset($_POST['title']))){
            $postManager = new PostsManager();
            $updatePost = $postManager->updatePost($_POST['title'],$_POST['post-edit'],$_GET['id']);
            header('Location: index.php?p=dashboard');
            exit;
        } else {
            header('Location: index.php?p=post-edit');
            exit;
        }
    }

    /**
     * Deleting article
     */
    public function deletePost() {
        if (htmlentities(isset($_GET['id']))){
            $postManager = new PostsManager();
            $postManager->deletePost($_GET['id']);
            echo json_encode('success');
        }
    }
}