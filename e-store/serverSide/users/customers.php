<?php

require_once "/xampp/htdocs/e-store/serverSide/users/user.php";

class Customers extends User{

    private $username;

    public function __construct( $id, $username, $name, $email, $password, $role)
    {
        parent::__construct( $id, $name, $email, $password, $role);
        $this->username = $username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    public function getUsername()
    {
        return $this->username;
    }

    
}
