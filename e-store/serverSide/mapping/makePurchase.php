<?php
require "/xampp/htdocs/e-store/dataBase/dbConnection/database.php";


if($_SERVER["REQUEST_METHOD"] === "POST"){

    try{
        $employee_id = $_POST["employee_id"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $product_id = $_POST["product_id"];
        $user_id = $_POST["user_id"];
    
        $create_order = $dbc->prepare("insert into orders(employee_id, name, price, product_id, user_id) values (:employee_id, :name, :price, :product_id, :user_id)");
        $create_order->bindParam(":employee_id", $employee_id,PDO::PARAM_INT);
        $create_order->bindParam(":name",$name,PDO::PARAM_STR);
        $create_order->bindParam(":price", $price,PDO::PARAM_INT);
        $create_order->bindParam(":product_id",$product_id, PDO::PARAM_INT);
        $create_order->bindParam(":user_id",$user_id,PDO::PARAM_INT);
        $create_order->execute();
        header("Location: http://localhost/e-store/home/login/store");
        exit();

    }catch(PDOException $e){
        echo $e;
        exit();
    }

}