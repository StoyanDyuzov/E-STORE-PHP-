<?php

require "/xampp/htdocs/e-store/dataBase/dbConnection/database.php";
require_once "/xampp/htdocs/e-store/serverSide/users/admins.php";
require_once "/xampp/htdocs/e-store/serverSide/users/customers.php";
require_once "/xampp/htdocs/e-store/serverSide/users/employee.php";


function checkdata($dbc, $username_input, $table)
{
    try{
        $result = $dbc->prepare("select * from $table where username = :username");
        $result->bindParam(":username",$username_input);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        exit();
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    
    $username_input = $_POST["username"];
    $password_input = $_POST["password"];
    

    $customers_results = checkdata($dbc,$username_input, "customers");
    $admin_results = checkdata($dbc,$username_input,"admins");
    $employee_results = checkdata($dbc,$username_input,"employee");


    if(password_verify($password_input, $customers_results[0]["PASSWORD"]))
    {
        
        $customer = new Customers(
            $customers_results[0]["id"],
            $customers_results[0]["username"],
            $customers_results[0]["name"],
            $customers_results[0]["email"],
            $customers_results[0]["password"],
            "customer");
        header("Location: http://localhost/e-store/home/login/store");
        exit();
    }
    else if(password_verify($password_input,$employee_results[0]["PASSWORD"]))
    {
        
        $employee = new Employee(
            $employee_results[0]["id"],
            $employee_results[0]["name"],
            $employee_results[0]["email"],
            $employee_results[0]["password"],
            $employee_results[0]["serialnumber"],
            "employee",
            $employee_results[0]["position"]
        );
        header("Location: http://localhost/e-store/home/login/employeeDashboard");
        exit();

    }
    else if(password_verify($password_input,$admin_results[0]["PASSWORD"]))
    {
        $admin = new Admin(
            $admin_results[0]["id"],
            $admin_results[0]["name"],
            $admin_results[0]["email"],
            $admin_results[0]["password"],
            "admin",
            $admin_results[0]["serialnumber"],
        );
        header("Location: http://localhost/e-store/home/login/adminDashboard");
        exit();
    }
    else{
        
        header("Location: http://localhost/e-store/home/login");
        exit();
    }
    
}