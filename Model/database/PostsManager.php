<?php
namespace App\Model\Database;

use App\Model\Post;

class PostsManager extends Manager {

    /**
     * @return Post[]
     */
    public function getPostsList() {
        $request = $this->query("
            SELECT post_id ,post_title, content , post_date
            FROM p4_posts 
            ORDER BY post_date ASC    
        ");

        $posts = [];



        while ($post = $request->fetch()){
            $commentManager = new CommentsManager();
            $nbComments = $commentManager->getNbComment($post['post_id']);

        $postFeatures = [
              'id' => $post['post_id'],
              'title' => $post['post_title'],
              'content' => $post['content'],
              'date' => $post['post_date'],
              'nbComments' => $nbComments['nb_comment']
            ];
        $posts[] = new Post($postFeatures);
        }

        return $posts;
    }

    /**
     * @return Post
     */
    public function getPostsListHome() {
        $request = $this->query("
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
        $request = $this->prepare("
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
     * @param $author_id
     */
    public function sendPost($post_title, $content,$author_id){
        $sendPost = $this->prepare("
            INSERT INTO p4_posts(post_title, content, post_date, author_id) 
            VALUES (?,?,NOW(),?)
        ");
        $sendPost->execute(array($post_title, $content,$author_id));
    }

    /**
     * @param $post_id for the id reference in the DB
     */
    public function deletePost($post_id) {
        $deletePost = $this->prepare('
                DELETE FROM p4_posts 
                WHERE post_id = ?
                ');
        $deletePost->execute(array($post_id));
    }

    /**
     * @param $title for the title of the post in the DB
     * @param $content for the content of the post in the DB
     * @param $post_id for the id reference in the DB
     */
    public function updatePost($title, $content, $post_id){
        $updatePost = $this->prepare('
                UPDATE p4_posts 
                SET post_title = ?, content = ? 
                WHERE post_id = ?
                ');
        $updatePost->execute(array($title, $content, $post_id));
    }


    /**
     * @param $post_id
     * @return int
     */
    public function idCheck($post_id) {
        $idChecker = $this->prepare("
                SELECT COUNT(*) 
                AS id_check 
                FROM p4_posts 
                WHERE post_id = ?
                ");
        $idChecker->execute([$post_id]);
        $count = $idChecker->fetch();
        $verify = $count['id_check'];

        return $verify;
    }

}