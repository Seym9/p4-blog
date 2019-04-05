<?php

namespace App\Model;


use DateTime;

class Post {
    private $_id;
    private $_title;
    private $_content;
    private $_date;

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

    public function setTitle(string $postTitle) {
            $this->_title = $postTitle;
    }

    public function setContent(string $content) {
            $this->_content = $content;
    }

    public function setCreationDate(string $_date) {
            $this->_date = new dateTime($_date);

    }

    public function getId() :int {
        return $this->_id;
    }

    public function getTitle() :string {
        return $this->_title;
    }

    public function getContent() :string {
        return $this->_content;
    }

    public function getPostDate() {
        return $this->_date;
    }
}