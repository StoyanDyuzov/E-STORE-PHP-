<?php

require "/xampp/htdocs/e-store/dataBase/dbConnection/database.php";
require "/xampp/htdocs/e-store/serverSide/mapping/loginController.php";


$dataP = $dbc->prepare("SELECT * FROM products");
$dataP->execute();
$products = $dataP->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-top: 50px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        .product {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        .product img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .product h2 {
            color: #333;
            font-size: 1.5em;
        }
        .product p {
            color: #666;
            margin-top: 5px;
            line-height: 1.4;
        }
        .product .price {
            font-weight: bold;
            color: #007bff;
            font-size: 1.2em;
            margin-top: 10px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>
        <div class="products">
            <?php foreach ($products as $product) { ?>
                <div class="product">
                    <img src="<?php echo $product['imgpath']; ?>" alt="Product Image">
                    <h2><?php echo $product['name']; ?></h2>
                    <p><?php echo $product['description']; ?></p>
                    <p class="price">$<?php echo number_format($product['price'], 2); ?></p>
                    <form method="post" action="/e-store/home/login/store/purchase">
                        <input type="text" value="<?php echo $product["name"] ?>" name= "name"class="inputHide" style="display: none;">
                        <input type="text" value="<?php echo $product["price"] ?>" name = "price"class="inputHide" style="display: none;">
                        <input type="text" value="<?php echo $product["id"] ?>" name = "product_id"class="inputHide" style="display: none;">
                        <input type="text" value="<?php echo "1" ?>" name = "user_id" class="inputHide" style="display: none;">
                        <input type="text" value="<?php echo $product["employee_id"] ?>" name= "employee_id" class="inputHide" style="display: none;">
                        <button type="submit">Purchase</button>
                    </form>
                    
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

