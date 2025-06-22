<?php 
include 'C:\xampp\htdocs\Tech_Mitra\includes\session.php';
include 'C:\xampp\htdocs\Tech_Mitra\db\db.php';
include 'C:\xampp\htdocs\Tech_Mitra\includes\sidebar.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css"> <!-- Ensure the path is correct -->
</head>
<body>
    
    <div class="container">
        <div class="home-content">
            <div class="header">
                <h1>Hi..<?php htmlspecialchars($_SESSION['username']);?></h1>
                <h1>What Do You Want To Do Today?</h1>
            </div>
            <div class="buttons">
                <a href="coding.php">
                    <button class="btn">
                        <img src="../images/Coding_Pr.png" alt="Coding Practice" />
                    </button>
                    <p>Coding Practice</p>
                </a>
                <a href="interview.php">
                    <button class="btn">
                        <img src="../images/Aptitude_Pr2.jpeg" alt="Interview Preparation" />
                    </button>
                    <p>Interview Preparation</p>
                </a>
                <a href="learning.php">
                    <button class="btn">
                        <img src="../images/Learn.png" alt="Learn Something" />
                    </button>
                    <p>Learn Courses</p>
                </a>
                <a href="communication.php">
                    <button class="btn">
                        <img src="../images/communi.png" alt="Improve Communication" />
                    </button>
                    <p>Improve English</p>
                </a>
                <a href="sidework.php">
                    <button class="btn">
                        <img src="../images/ytch.jpeg" alt="Side Work" />
                    </button>
                    <p>Side Work</p>
                </a>

                <a href="internships.php">
                    <button class="btn">
                        <img src="../images/inter.jpeg" alt="Internships" />
                    </button>
                    <p>Find Internships</p>
                </a>
                <a href="hosting.php">
                    <button class="btn">
                        <img src="../images/webhost.jpeg" alt="Manage Hosting" />
                    </button>
                    <p>Manage hosting</p>
                </a>
                <a href="roadmaps.php">
                    <button class="btn">
                        <img src="../images/roadmap.jpeg" alt="Carrer Roadmaps" />
                    </button>
                    <p>Carrer Roadmaps</p>
                </a>                
            </div>
            <div class="transparent-bg">
                <h1>Designed & Developed By DIGIca</h1>
            </div>
        </div>
        
    </div>
</body>
</html>
