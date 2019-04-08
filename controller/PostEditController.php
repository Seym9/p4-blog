<?php
namespace App\controller;

use App\Model\Database\CommentsManager;
use App\Model\Database\PostsManager;

class PostEditController extends PostsController {

    /**
     * View to edit articles
     */
    public function displayPostEdit () {
        if (isset($_GET['id'])){

            $postManager = new PostsManager();
            $commentManager = new CommentsManager();
            $post = $postManager->getPost($_GET['id']);

            $this->render(['admin/postModification'], compact('post'));
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
                $postCreated = $postsManager->sendPost($_POST['title'],$_POST['post']);
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
        $this->render(['admin/postModification']);
    }

    /**
     * Specific view to read a article and comment as admin
     */
    public function PostAdmin(){

        if (isset($_GET['id'])){

            $postManager = new PostsManager();
            $commentManager = new CommentsManager();
            $post = $postManager->getPost($_GET['id']);
            $comments = $commentManager->getComments($_GET['id']);

            $this->render(['admin/postAdmin'], compact('post','comments' ));
        } else {
            echo '404';
        }
    }

    /**
     * Delete comment
     */
    public function deleteComment(){
        $comments = new CommentsManager();
        $comments->deleteComments($_GET['id_com']);
        echo json_encode('success');
    }

    /**
     * Update article after editing
     */
    public function updatePost() {
        if (isset($_POST['title'])){
            $postManager = new PostsManager();
            $updatePost = $postManager->updatePost($_POST['title'],$_POST['post'],$_GET['id']);
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
        if (isset($_GET['id'])){
            $postManager = new PostsManager();
            $postManager->deletePost($_GET['id']);
            echo json_encode('success');
        }
    }


}