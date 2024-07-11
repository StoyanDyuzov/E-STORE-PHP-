<?php
require "/xampp/htdocs/e-store/dataBase/dbConnection/database.php";

$dataOrders = $dbc->prepare("SELECT * FROM orders");
$dataOrders->execute();
$allOrders = $dataOrders->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #555;
        }
        .dashboard-section {
            margin-top: 30px;
        }
        form {
            text-align: left;
            margin: 20px auto;
            width: 60%;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <p>Welcome to the admin dashboard. Here you can manage employee profiles, customer profiles, and view order history.</p>
        
        <div class="dashboard-section">
            <h2>Create Employee</h2>
            <form action="/e-store/home/login/adminDashboard/createemployee" method="post">
                <label for="emp-name">Name:</label>
                <input type="text" id="emp-name" name="name" required>

                <label for="emp-username">Username:</label>
                <input type="text" id="emp-username" name="username" required>

                <label for="emp-email">Email:</label>
                <input type="email" id="emp-email" name="email" required>

                <label for="position">Position:</label>
                <input type="text" id="position" name="position" required>

                <label for="serialnumber">Serial Number:</label>
                <input type="text" id="serialnumber" name="serialnumber" required>

                <label for="emp-password">Password:</label>
                <input type="password" id="emp-password" name="password" required>

                <input type="submit" value="Sign Up">
            </form>
        </div>

        <div class="dashboard-section">
            <h2>Order History</h2>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Product ID</th>
                        <th>User ID</th>
                        <th>Employee ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($allOrders as $currentOrder): ?>
                        <tr>
                            <td><?php echo $currentOrder["id"]; ?></td>
                            <td><?php echo $currentOrder["name"]; ?></td>
                            <td><?php echo $currentOrder["price"]; ?></td>
                            <td><?php echo $currentOrder["product_id"]; ?></td>
                            <td><?php echo $currentOrder["user_id"]; ?></td>
                            <td><?php echo $currentOrder["employee_id"]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
 