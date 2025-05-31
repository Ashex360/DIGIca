<?php
include 'C:\xampp\htdocs\Tech_Mitra\db\db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            background:white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
            padding: 30px;   
            color:purple     
        }

        .header {
            margin-bottom: 10px;
            color:purple;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .header h1 {
            color:purple;
            font-size: 2.5em;
            margin: 0;
        }

        .header p {
            font-size: 1.2em;
            margin: 5px 0;
        }

        .form-box {
            
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
           
        }

        .form-box h2 {
            color:purple;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-box label {
            color:purple;
            display: block;
            margin-bottom: 5px;
            text-align:left;
        }

        .form-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-box button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
        }
        @media (max-width:768px){
            .form-box {
            padding: 20px;
            border-radius: 10px;
            width:70%;
            max-width:300px;
            height:auto;
           
            }

            .form-box h2 {
                color:purple;
                text-align: center;
                margin-bottom: 30px;
            }

            .form-box label {
                color:purple;
                display: block;
                margin-bottom: 5px;
                text-align:left;
            }

            .form-box input {
                width:220px;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .form-box button {
                width:230px;
                padding: 10px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
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
            }

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
            <h2>Register</h2>
            <form method="POST" action="">
                <label>Username:</label>
                <input type="text" name="username" required>
                <label>Email:</label>
                <input type="email" name="email" required>
                <label>Password:</label>
                <input type="password" name="password" required>
                <button type="submit">Register</button>
            </form>
            <a href="login.php">Existing User? Login Here</a>
        </div>
        <div class="transparent-bg">
                <h1>Designed & Developed By DIGIca</h1>
        </div>
    </div>
</body>
</html>
