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
    <title>Coding Practise</title>
    <link rel="stylesheet" href="css/learning.css"> <!-- Ensure the path is correct -->
</head>
<body>
    
    <div class="container">
        <div class="home-content">
            <div class="header">
                <h1>Choose Platform..</h1>
            </div>
            <div class="buttons">
                <a>
                    <button class="btn"id="btn1">
                        <img src="../images/Learning/coursera.jpeg" alt="Coursera" />
                    </button>
                    <p>Coursera</p>
                </a>
                <a>
                    <button class="btn"id="btn2">
                        <img src="../images/Learning/gfg.jpeg" alt="Geeks For Geeks" />
                    </button>
                    <p>Geeks For Geeks</p>
                </a>
                <a>
                    <button class="btn"id="btn3">
                        <img src="../images/Learning/freecodecamp.jpeg" alt="Free Code Camp" />
                    </button>
                    <p>Free Code Camp</p>
                </a>
                <a>
                    <button class="btn"id="btn4">
                        <img src="../images/Learning/mslearn.jpeg" alt="MS Learn" />
                    </button>
                    <p>MS Learn</p>
                </a>
                <a>
                    <button class="btn"id="btn5">
                        <img src="../images/Learning/sparta.jpeg" alt="Sparta" />
                    </button>
                    <p>Sparta</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/Learning/swayam.jpeg" alt="Swayam" />
                    </button>
                    <p>Swayam</p>
                </a>
                <a>
                    <button class="btn"id="btn7">
                        <img src="../images/Learning/udemy.jpeg" alt="Udemy" />
                    </button>
                    <p>Udemy</p>
                </a>
                <a>
                    <button class="btn"id="btn8">
                        <img src="../images/Learning/w3school.jpeg" alt="W3 Schools" />
                    </button>
                    <p>W3 Schools</p>
                </a>
            </div>
            <script>
                // Button click event listeners to open external sites
                document.getElementById('btn1').addEventListener('click', () => {
                    window.open('https://www.coursera.org/my-learning', '_blank'); // Opens Google in a new tab
                });

                document.getElementById('btn2').addEventListener('click', () => {
                    window.open('https://www.geeksforgeeks.org/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn3').addEventListener('click', () => {
                    window.open('https://www.freecodecamp.org/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn4').addEventListener('click', () => {
                    window.open('https://learn.microsoft.com/en-gb/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn5').addEventListener('click', () => {
                    window.open('https://india.spartacodingclub.com/login', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn6').addEventListener('click', () => {
                    window.open('https://swayam.gov.in/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn7').addEventListener('click', () => {
                    window.open('https://www.udemy.com/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn8').addEventListener('click', () => {
                    window.open('https://www.w3schools.com/', '_blank'); // Opens YouTube in a new tab
                });
            </script>
            <div class="transparent-bg">
                <h1>Designed & Developed By DIGIca</h1>
            </div>
        </div>
    </div>

</body>
</html>
