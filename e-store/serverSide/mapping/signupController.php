<?php

require "/xampp/htdocs/e-store/dataBase/dbConnection/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username1 = $_POST['username']; 
    $name = $_POST["name"];
    $email = $_POST['email'];
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try{
        
        $findrecord = $dbc->prepare("select * from customers where username = :username");
        $findrecord->bindParam(":username",$username1);
        $findrecord->execute();
        if($findrecord->rowCount() > 0){
        
            header("Location: http://localhost/e-store/home/signup");
            exit();
    
        }
        
    }catch(PDOException $e)
    {
        echo $e;
        exit();
    }
    try{
    
        $insertdata = $dbc->prepare("insert into customers(name,username,email,password) values (:name, :username,:email,:password);");
        $insertdata->bindParam(":username",$username1);
        $insertdata->bindParam(":name",$name);
        $insertdata->bindParam(":email",$email);
        $insertdata->bindParam(":password",$hashed_password);
        $insertdata->execute();
        header("Location: http://localhost/e-store/home/login");
        exit();
    }catch(PDOException $e)
    {
        echo $e;
        exit();
    }
    

}else{
    header("Location: http://localhost/e-store/home/signup");
    exit();
}   
