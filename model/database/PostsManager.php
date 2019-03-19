<?php

namespace App\Model\Database;

class PostsManager extends Manager {

    /**
     * @return array
     */
    public function getPostsList() {
        $dbConnect = $this->getDB();
        $request = $dbConnect->query("
            SELECT id ,post_title, content , DATE_FORMAT(post_date, '%d/%m/%Y') as date_fr
            FROM p4_posts 
            ORDER BY post_date DESC    
        ");
        $postsList = $request->fetchAll();
        return $postsList;
    }

    /**
     * @param $post_id
     * @return mixed
     */
    public function getPost($post_id) {
        $dbConnect = $this->getDB();
        $request = $dbConnect->prepare("
            SELECT id, post_title, content, DATE_FORMAT(post_date, '%d/%m/%Y') AS date_fr 
            FROM p4_posts 
            WHERE id = ?");
        $request->execute(array($post_id));
        $post = $request->fetch();
        return $post;
    }

}