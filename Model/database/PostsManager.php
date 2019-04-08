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
            SELECT post_id ,post_title, content , post_date
            FROM p4_posts 
            ORDER BY post_date ASC    
        ");

        $posts = [];

        while ($post = $request->fetch()){

            $postFeatures = [
              'id' => $post['post_id'],
              'title' => $post['post_title'],
              'content' => $post['content'],
              'date' => $post['post_date']
            ];
            $posts[] = new Post($postFeatures);
        }
        return $posts;
    }

    /**
     * @return Post
     */
    public function getPostsListHome() {
        $dbConnect = $this->getDB();
        $request = $dbConnect->query("
            SELECT post_id ,post_title, content ,post_date
            FROM p4_posts 
            ORDER BY post_date DESC
            LIMIT 1
        ");

        $post = $request->fetch();

            $postFeatures = [
                'id' => $post['post_id'],
                'title' => $post['post_title'],
                'content' => $post['content'],
                'date' => $post['post_date']
            ];
            $posts = new Post($postFeatures);

        return $posts;
    }

    /**
     * @param $post_id for the id reference in the DB
     * @return Post
     */
    public function getPost($post_id) {
        $dbConnect = $this->getDB();
        $request = $dbConnect->prepare("
            SELECT post_id, post_title, content, post_date, username
            FROM p4_posts 
            INNER JOIN p4_users AS author
            ON p4_posts.author_id = author.user_id 
            WHERE p4_posts.post_id = ? 
            ");
        $request->execute([$post_id]);

        $post = $request->fetch();

        $postFeatures = [
            'id' => $post['post_id'],
            'title' => $post['post_title'],
            'content' => $post['content'],
            'date' => $post['post_date'],
            'author' => $post['username']
        ];
        $post = new Post($postFeatures);

        return $post;
    }

    /**
     * @param $post_title for the title of the post in the DB
     * @param $content for the content of the post in the DB
     */
    public function sendPost($post_title, $content){
        $dbConnect = $this->getDB();
        $sendPost = $dbConnect->prepare("
            INSERT INTO p4_posts(post_title, content, post_date) 
            VALUES (?,?,NOW())
        ");
        $sendPost->execute(array($post_title, $content));
    }

    /**
     * @param $post_id for the id reference in the DB
     */
    public function deletePost($post_id) {
        $dbConnect = $this->getDB();
        $deletePost = $dbConnect->prepare('DELETE FROM p4_posts WHERE id = ?');
        $deletePost->execute(array($post_id));
    }

    /**
     * @param $title for the title of the post in the DB
     * @param $content for the content of the post in the DB
     * @param $post_id for the id reference in the DB
     */
    public function updatePost($title, $content, $post_id){
        $dbConnect = $this->getDB();
        $updatePost = $dbConnect->prepare('UPDATE p4_posts SET post_title = ?, content = ? WHERE id = ?');
        $updatePost->execute(array($title, $content, $post_id));

    }

}