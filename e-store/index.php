<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/e-store/home':
        require __DIR__."/clientSide/home.php";
        break;

    case "/e-store/home/login":
        require __DIR__."/clientSide/login.php";
        break;
    case "/e-store/home/signup":
        require __DIR__."/clientSide/signup.php";
        break;

    case "/e-store/home/login/adminDashboard":
        require __DIR__."/clientSide/adminDashboard.php";
        break;
    case "/e-store/home/login/employeeDashboard":
        require __DIR__."/clientSide/employeeDashboard.php";
        break;
    
    case "/e-store/home/login/store":
        require __DIR__."/clientSide/store.php";
        break;
    
    case"/e-store/home/login/employeeDashboar":
        require __DIR__."/clientSide/employeeDashboard.php";
        break;
    case "/e-store/signup/signupsubmit":
        require __DIR__."/serverSide/mapping/signupController.php";
        break;
    
    case "/e-store/login/loginsubmit":
        require __DIR__."/serverSide/mapping/loginController.php";
        break;

    case"/e-store/home/login/adminDashboar/createemployee":
        require __DIR__."/serverSide/mapping/createEmployee.php";
        break;

    case"/e-store/home/employeeDashboard/createproduct":
        require __DIR__."/serverSide/mapping/createProduct.php";
        break;
    case "/e-store/home/login/store/purchase":
        require __DIR__."/serverSide/mapping/makePurchase.php";
        break;

    
    default:
        http_response_code(404);
        require __DIR__ . '/clientSide/404.php';
        break;
}