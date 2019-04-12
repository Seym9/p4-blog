<?php
namespace App\controller;

use App\Model\Database\CommentsManager;

class CommentsController extends MainController{

    /**
     * send the comment to the DB
     */
    public function sendComment () {
///^[\s]*$/
        if (htmlentities(isset($_GET['id_post']))){
            if (preg_match('#^[A-Za-z]{1}[\w]{2,}$#', $_POST['author']) && strlen(trim($_POST['comment'])) > 0) {
                $comment = new CommentsManager();
                $comment->sendComments($_POST['author'], $_POST['comment'], $_GET['id_post']);

                header('Location: index.php?p=post&id=' . $_GET['id_post']);
                exit;
            }else {
                header('Location: index.php?p=post&id=' . $_GET['id_post']);
                exit;

            }
        } else {
            header('Location: index.php?p=post&id=' . $_GET['id_post']);
            exit;
        }
    }

    /**
     * Add +1 to the report column in the DB
     */
    public function reportComment() {

        if (htmlentities(isset($_GET["id_post"]))){
            $report = new CommentsManager();
            $report->reportComment($_GET['report_com']);
        }

        header('Location: index.php?p=post&id=' . htmlentities($_GET['id_post']));
        exit;
    }

    public function deleteComment(){
        $comments = new CommentsManager();
        $comments->deleteComments($_GET['id_com']);
        echo json_encode('success');
    }

    /**
     * Display the the comment in the admin page
     */
    public function dashboardComment() {
        if ($_SESSION['status'] === 'admin'){
            $list = new CommentsManager();
            $displayListCom = $list->getCommentsListDashboard();

            $this->render(['admin/dashboardComments'], compact('displayListCom'));
        }else{
            header('Location: index.php');
            exit;
        }
    }
}