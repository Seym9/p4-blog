<?php


namespace App\controller;


use App\Model\Database\CommentsManager;
use App\Model\Database\PostsManager;

class DashboardController extends PostsController {

    public function dashboardPost() {
        $postsList = new PostsManager();
        $nbOfComment = new CommentsManager();
        $displayList = $postsList->getPostsList();
       // $comments = $nbOfComment->getComments($test);

        $this->render(['admin/dashboard'], compact('displayList'));

    }
    public function displayListComDashboard() {
        $list = new CommentsManager();
        $displayListCom = $list->getCommentsListDashboard();

        $this->render(['admin/dashboardComments'], compact('displayListCom'));
    }

}