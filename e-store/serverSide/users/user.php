<?php


class User{
    private $id;
    private $name;
    private $email;
    private $password;
    private $role;

    public function __construct($id,$name, $email, $password,$role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getRole()
    {
        return $this->role;
    }

}
