<?php

namespace App\Model;


use DateTime;

class Post {
    private $_id;
    private $_title;
    private $_content;
    private $_date;
    private $_author;
    private $_nbComments;

    /**
     * Post constructor.
     * @param array $post
     */
    public function __construct(array $post) {
        $this->hydrate($post);
    }

    /**
     * @param $post
     */
    public function hydrate($post) {
        foreach($post as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->_id = $id;
    }

    /**
     * @param string $postTitle
     */
    public function setTitle(string $postTitle) {
            $this->_title = $postTitle;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content) {
            $this->_content = $content;
    }

    /**
     * @param $_date
     * @throws \Exception
     */
    public function setDate($_date) {
            $this->_date = new DateTime($_date);

    }

    public function setAuthor($_author){
            $this->_author = $_author;
    }

    public function setNbComments(int $nbComments) {
        $this->_nbComments =$nbComments;
    }

    /**
     * @return int
     */
    public function getId() :int {
        return $this->_id;
    }

    /**
     * @return string
     */
    public function getTitle() :string {
        return $this->_title;
    }

    /**
     * @return string
     */
    public function getContent() :string {
        return $this->_content;
    }

    /**
     * @param $format
     * @return mixed
     */
    public function getDate($format) {
        return $this->_date->format($format);
    }

    /**
     * @return mixed
     */
    public function getAuthor(){
        return $this->_author;
    }

    /**
     * @return int
     */
    public function getNbComments() :int {
        return $this->_nbComments;
    }
}