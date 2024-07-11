<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Website</h1>
    </header>
    <div class="container">
        <h2>WEB STORE</h2>
        <p>Sign up and get started!</p>
        <a href="/e-store/home/login">LOG IN</a>
        <a href="/e-store/home/signup">SIGN UP</a>
    </div>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Company</p>
    </footer>
</body>
</html>
