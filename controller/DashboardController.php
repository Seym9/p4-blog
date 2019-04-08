<?php


namespace App\controller;


use App\Model\Database\CommentsManager;
use App\Model\Database\PostsManager;

class DashboardController extends PostsController {

    /**
     * Display the article in the admin page
     */
    public function dashboardPost() {
        $postsList = new PostsManager();
        $nbOfComment = new CommentsManager();
        $displayList = $postsList->getPostsList();
       // $comments = $nbOfComment->getComments($test);

        $this->render(['admin/dashboard'], compact('displayList'));

    }

    /**
     * Display the the comment in the admin page
     */
    public function displayListComDashboard() {
        $list = new CommentsManager();
        $displayListCom = $list->getCommentsListDashboard();

        $this->render(['admin/dashboardComments'], compact('displayListCom'));
    }

}