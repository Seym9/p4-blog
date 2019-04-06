<?php

namespace App\Model;

use DateTime;

class Comment{
    private $_id;
    private $_author;
    private $_message;
    private $_idPost;
    private $_commentDate;
    private $_report;

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
    public function getCommentDate($format)
    {
        return $this->_commentDate->format($format);
    }

    /**
     * @param string $commentDate
     * @throws \Exception
     */
    public function setCommentDate($commentDate)
    {
        $this->_commentDate = new DateTime($commentDate);
    }

    /**
     * @return mixed
     */
    public function getReport(): int
    {
        return $this->_report;
    }

    /**
     * @param mixed $id
     */
    public function setReport(int $id)
    {
        $this->_report = $id;
    }

}