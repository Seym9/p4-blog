<?php


namespace App\controller;


use App\model\database\CommentsManager;
use App\Model\Database\PostsManager;

class DashboardController extends PostsController {

    public function dashboardPost() {
        $comments = new CommentsManager();
        $postsList = new PostsManager();

        $displayList = $postsList->getPostsList();
        //$displayNbOfComment = $comments->commentNumber();

        require "view/admin/dashboard.php";
    }
    public function displayListComDashboard() {
        $list = new CommentsManager();
        $displayListCom = $list->getCommentsListDashboard();

        require "view/admin/dashboardComments.php";
    }

}