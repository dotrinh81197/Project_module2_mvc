<?php

namespace model;

class User
{
    public $user_id;
    public $username;
    public $password;
    public $email;
    public $level;
    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }
}
