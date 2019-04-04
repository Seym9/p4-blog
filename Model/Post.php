<?php

namespace App\Model;


use DateTime;

class Post {
    private $_id;
    private $_postTitle;
    private $_content;
    private $_postDate;

    public function __construct(array $post) {
        $this->hydrate($post);
    }
    public function hydrate($post) {
        foreach($post as $key => $value) {
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }

    public function setId(int $id) {
        $this->_id = $id;
    }

    public function setTitle(string $_postTitle) {
            $this->_postTitle = $_postTitle;
    }

    public function setContent(string $content) {
            $this->_content = $content;
    }

    public function setCreationDate(string $_postDate) {
        $this->_postDate = new DateTime($_postDate);
    }

    public function getId() :int {
        return $this->_id;
    }

    public function getTitle() :string {
        return $this->_postTitle;
    }

    public function getContent() :string {
        return $this->_content;
    }

    public function getCreationDate(): DateTime {
        return $this->_postDate;
    }
}