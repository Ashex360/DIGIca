<?php
session_start();
include 'C:\xampp\htdocs\Tech_Mitra\db\db.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        } else {
            $error = "Invalid username or password!";
        }
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | DIGIca</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #FF3CAC;
            background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .container {
            text-align: center;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
            padding: 30px;
        }

        .header h1 {
            font-size: 2.5em;
            color: #007BFF;
            margin-bottom: 25px;
        }

        .header p {
            font-size: 1em;
            color: #555;
        }

        .form-box {
            margin-top: 20px;
            
        }

        .form-box h2 {
            font-size: 1.5em;
            color: #007bff;
            margin-bottom: 15px;
        }

        .form-box label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        .form-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .form-box input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .form-box button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-box button:hover {
            background-color: #0056b3;
        }

        .form-box a {
            display: block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .form-box a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }
        .transparent-bg {
            background-color: rgba(155, 8, 162, 0.5); /* Black with 50% transparency */
            padding: 20px;
            border-radius: 10px; /* Optional for rounded corners */
            width:auto;
            text-align: center;
            font-size: 8px;
            color:rgb(242, 236, 243);
            bottom:0;
            margin-bottom:0%;
            margin-top:50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>DIGIca</h1>
            <p>Your Personal Development Portal</p>
        </div>
        <div class="form-box">
            <h2>Login</h2>
            <form method="POST" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
            <a href="register.php">New User? Register Here</a>
            <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>

        </div>
        <div class="transparent-bg">
                <h1>Designed & Developed By DIGIca</h1>
        </div>
    </div>
</body>
</html>
