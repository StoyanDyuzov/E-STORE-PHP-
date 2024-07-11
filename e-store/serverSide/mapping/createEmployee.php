<?php

require "/xampp/htdocs/e-store/dataBase/dbConnection/database.php";
require_once "/xampp/htdocs/e-store/serverSide/users/employee.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $position = $_POST["position"];
    $serialnumber = $_POST["serialnumber"];
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $employee = new Employee(null,$name,$email,$hashed_password,$serialnumber,"employee",$position);
    $employee->createEmployeeRecord($dbc);
    header("Location: http://localhost/e-store/home/login/adminDashboard");
    exit();
}