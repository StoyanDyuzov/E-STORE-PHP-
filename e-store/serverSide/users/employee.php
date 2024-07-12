<?php

require_once "/xampp/htdocs/e-store/serverSide/users/user.php";


class Employee extends User{
    
    private $serial_number;
    private $position;

    public function __construct( $id, $name, $email, $password, $serial_number, $role, $position)
    {
        parent::__construct( $id, $name, $email, $password, $role);
        $this->position = $position;
        $this->serial_number = $serial_number;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }
    
    public function getPosition()
    {
        return $this->position;
    }
    
    public function setSerial_number($serial_number)
    {
        $this->serial_number = $serial_number;
    }
    
    public function getSerial_number()
    {
        return $this->serial_number;
    }


    public function createEmployeeRecord($dbc){
        try{
            $createRecord = $dbc->prepare("insert into employee(name,email,username,serialnumber,password) values(:name,:email,:username,:serialnumber,:password)");
            $name = $this->getName();
            $email = $this->getEmail();
            $username = $this->getName();
            $serialnumber = $this->getSerial_number();
            $password = $this->getPassword();
            $createRecord->bindParam(":name",$name);
            $createRecord->bindParam(":email",$email);
            $createRecord->bindParam(":username",$username);
            $createRecord->bindParam(":serialnumber",$serialnumber);
            $createRecord->bindParam(":password",$password);
            $createRecord->execute();

        }catch(PDOException $e){
            echo"Wrong data!";
            exit();
        }
        

    }
}
