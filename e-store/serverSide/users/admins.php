<?php

require_once "/xampp/htdocs/e-store/serverSide/users/user.php";

class Admin extends User{
    private $serial_number;

    public function __construct($id,$name,$email,$password,$role,$serial_number)
    {
        parent::__construct($id,$name,$email,$password,$role);
        $this->serial_number = $serial_number;
    }

    public function setSerial_number($serial_number)
    {
        $this->serial_number = $serial_number;
    }
    public function getSerial_number()
    {
        return $this->serial_number;
    }


}



