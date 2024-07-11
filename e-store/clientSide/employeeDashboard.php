<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
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
        form {
            margin-top: 20px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            height: 150px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Employee Dashboard</h1>
        <h2>Create a New Product</h2>
        <form action="/e-store/home/employeeDashboard/createproduct" method="post" enctype="multipart/form-data">
            <label for="name">Product Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" required></textarea><br><br>

            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" step="0.01" required><br><br>

            <label for="imgpath">Product Image:</label><br>
            <input type="file" id="imgpath" name="imgpath" required><br><br>

            <input type="submit" value="Create Product">
        </form>
    </div>
</body>
</html>
