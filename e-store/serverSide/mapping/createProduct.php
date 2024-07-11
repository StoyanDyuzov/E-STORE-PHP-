<?php

require "/xampp/htdocs/e-store/dataBase/dbConnection/database.php";
require_once "/xampp/htdocs/e-store/serverSide/users/products.php";
require "/xampp/htdocs/e-store/serverSide/mapping/loginController.php";


if($_SERVER["REQUEST_METHOD"] === "POST"){
    try{
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["imgpath"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $employee_id = $employee->getId();
        
        
        $product = new Products($name, $description, $price, $target_file, $employee_id);
        $product->uploadProduct($dbc);

        header("Location: http://localhost/e-store/home/login/employeeDashboard");
        exit();
    }catch(PDOException $e)
    {
        echo $e;
    }
    
    
}
