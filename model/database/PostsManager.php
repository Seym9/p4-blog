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
    public function getPostsListHome() {
        $dbConnect = $this->getDB();
        $request = $dbConnect->query("
            SELECT id ,post_title, content , DATE_FORMAT(post_date, '%d/%m/%Y') as date_fr
            FROM p4_posts 
            ORDER BY post_date DESC
            LIMIT 3
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

    public function sendPost($post_title, $content){
        $dbConnect = $this->getDB();
        $sendPost = $dbConnect->prepare("
            INSERT INTO p4_posts(post_title, content, post_date) 
            VALUES (?,?,NOW())
        ");
        $sendPost->execute(array($post_title, $content));

        // $count = $sendComments->rowCount();
    }

    public function deletePost($post_id) {
        $dbConnect = $this->getDB();
        $deletePost = $dbConnect->prepare('DELETE FROM p4_posts WHERE id = ?');
        $deletePost->execute(array($post_id));
    }

    public function updatePost($title, $content, $post_id){
        $dbConnect = $this->getDB();
        $updatePost = $dbConnect->prepare('UPDATE p4_posts SET post_title = ?, content = ? WHERE id = ?');
        $updatePost->execute(array($title, $content, $post_id));

    }

}