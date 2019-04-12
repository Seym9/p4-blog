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
     * @return int
     */
    public function getId(): int
    {
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->_author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author)
    {
        $this->_author = $author;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->_message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->_message = $message;
    }

    /**
     * @return int
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
     * @return date
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
     * @return int
     */
    public function getReport(): int
    {
        return $this->_report;
    }

    /**
     * @param int $id
     */
    public function setReport(int $id)
    {
        $this->_report = $id;
    }

}