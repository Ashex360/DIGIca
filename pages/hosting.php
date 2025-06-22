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
    <title>Free Hosting</title>
    <link rel="stylesheet" href="css/hosting.css"> <!-- Ensure the path is correct -->
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
                        <img src="../images/hostings/accuhosting.jpeg" alt="AccuWeb" />
                    </button>
                    <p>AccuWeb</p>
                </a>
                <a>
                    <button class="btn"id="btn2">
                        <img src="../images/hostings/infinityfree.jpeg" alt="Infinity Free" />
                    </button>
                    <p>Infinity Free</p>
                </a>
                <a>
                    <button class="btn"id="btn3">
                        <img src="../images/hostings/msazure.jpeg" alt="Ms Azure" />
                    </button>
                    <p>MS Azure</p>
                </a>
                <a>
                    <button class="btn"id="btn4">
                        <img src="../images/hostings/pyanywhere.jpeg" alt="PythonAnyWhere" />
                    </button>
                    <p>PythonAnyWhere</p>
                </a>
                <a>
                    <button class="btn"id="btn5">
                        <img src="../images/hostings/wordpress.jpeg" alt="WordPress" />
                    </button>
                    <p>WordPress</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/hostings/blooger2.jpeg" alt="Blogger" />
                    </button>
                    <p>Blogger</p>
                </a>
            </div>
            <script>
                // Button click event listeners to open external sites
                document.getElementById('btn1').addEventListener('click', () => {
                    window.open('https://www.accuwebhosting.com/about/free-students-hosting?_gl=1*40l0vn*_gcl_au*MTY1MTg2NjY3Mi4xNzM2MDk2MDM1', '_blank'); // Opens Google in a new tab
                });

                document.getElementById('btn2').addEventListener('click', () => {
                    window.open('https://dash.infinityfree.com/accounts', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn3').addEventListener('click', () => {
                    window.open('https://portal.azure.com/?pwa=1#home', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn4').addEventListener('click', () => {
                    window.open('https://www.pythonanywhere.com/user/Ashex360/webapps/#tab_id_ashex360_pythonanywhere_com', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn5').addEventListener('click', () => {
                    window.open('https://sardagrp.wordpress.com/wp-admin/?source=pwa', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn6').addEventListener('click', () => {
                    window.open('https://www.blogger.com/blog/stats/week/8488828005849971597', '_blank'); // Opens YouTube in a new tab
                });
            </script>
            <div class="transparent-bg">
                <h1>Designed & Developed By DIGIca</h1>
            </div>
        </div>
    </div>

</body>
</html>
