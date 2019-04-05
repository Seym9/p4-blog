<?php

namespace App\Model;

use DateTime;

class Comment{
    private $_id;
    private $_author;
    private $_message;
    private $_idPost;
    private $_commentDate;

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
        return $this->_idPost;
    }

    /**
     * @param int $idPost
     */
    public function setIdPost(int $idPost)
    {
        $this->_idPost = $idPost;
    }

    /**
     * @return mixed
     */
    public function getCommentDate(): string
    {
        return $this->_commentDate;
    }

    /**
     * @param string $commentDate
     * @throws \Exception
     */
    public function setCommentDate(string $commentDate)
    {
        $this->_commentDate = new DateTime($commentDate);
    }


}