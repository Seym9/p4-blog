<?php

namespace App\Model;


class User {
private $_id;
private $_login;
private $_username;
private $_password;
private $_status;

    /**
     * User constructor.
     * @param array $post
     */
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
    /**
     * @return mixed
     */
    public function getId() :int
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
    public function getLogin() :string
    {
        return $this->_login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin(string $login)
    {
        $this->_login = $login;
    }

    /**
     * @return mixed
     */
    public function getUsername() :string
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername(string $username)
    {
        $this->_username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * @return mixed
     */
    public function getStatus() :string
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus(string $status)
    {
        $this->_status = $status;
    }
}