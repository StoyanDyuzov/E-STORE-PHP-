<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        }
        form {
            width: 50%;
            margin: auto;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: block;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="/e-store/login/loginsubmit" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
