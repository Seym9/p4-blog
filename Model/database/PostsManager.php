<?php
namespace App\Model\Database;

use App\Model\Post;

class PostsManager extends Manager {

    /**
     * @return Post[]
     */
    public function getPostsList() {
        $dbConnect = $this->getDB();
        $request = $dbConnect->query("
            SELECT id ,post_title, content , post_date
            FROM p4_posts 
            ORDER BY post_date ASC    
        ");

        $posts = [];

        while ($post = $request->fetch()){

            $postFeatures = [
              'id' => $post['id'],
              'title' => $post['post_title'],
              'content' => $post['content'],
              'date' => $post['post_date']
            ];
            $posts[] = new Post($postFeatures);
        }
        return $posts;
    }

    public function getPostsListHome() {
        $dbConnect = $this->getDB();
        $request = $dbConnect->query("
            SELECT id ,post_title, content ,post_date
            FROM p4_posts 
            ORDER BY post_date DESC
            LIMIT 1
        ");

        $post = $request->fetch();

            $postFeatures = [
                'id' => $post['id'],
                'title' => $post['post_title'],
                'content' => $post['content'],
                'date' => $post['post_date']
            ];
            $posts = new Post($postFeatures);

        return $posts;
    }

    /**
     * @param $post_id
     * @return Post
     */
    public function getPost($post_id) {
        $dbConnect = $this->getDB();
        $request = $dbConnect->prepare("
            SELECT id, post_title, content, post_date
            FROM p4_posts 
            WHERE id = ?");
        $request->execute([$post_id]);

        $post = $request->fetch();

        $postFeatures = [
            'id' => $post['id'],
            'title' => $post['post_title'],
            'content' => $post['content'],
            'date' => $post['post_date']
        ];

        $post = new Post($postFeatures);

        //var_dump($post);
       // die();
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