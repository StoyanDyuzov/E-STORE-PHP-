<?php

$host = 'localhost'; 
$dbname = 'e-store'; 
$username = 'root'; 
$password = ''; 

try{
    $dbc = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Connection failed";
}
global $dbc;