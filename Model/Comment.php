<?php

namespace App\Model;

use DateTime;

class Comment{
    private $_id;
    private $_author;
    private $_message;
    private $_id_post;
    private $_comment_date;

    public function __construct(array $comment) {
        $this->hydrate($comment);
    }
    public function hydrate($comment) {
        foreach($comment as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }
    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getAuthor(): string
    {
        return $this->_author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor(string $author)
    {
        $this->_author = $author;
    }

    /**
     * @return mixed
     */
    public function getMessage(): string
    {
        return $this->_message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage(string $message)
    {
        $this->_message = $message;
    }

    /**
     * @return mixed
     */
    public function getIdPost(): int
    {
        return $this->_id_post;
    }

    /**
     * @param mixed $id_post
     */
    public function setIdPost(int $id_post)
    {
        $this->_id_post = $id_post;
    }

    /**
     * @return mixed
     */
    public function getCommentDate(): string
    {
        return $this->_comment_date;
    }

    /**
     * @param mixed $comment_date
     */
    public function setCommentDate(string $comment_date)
    {
        $this->_comment_date = new dateTime($comment_date);
    }


}