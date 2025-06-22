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
    <title>Find Internships</title>
    <link rel="stylesheet" href="css/internships.css"> <!-- Ensure the path is correct -->
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
                        <img src="../images/internships/aicte.jpeg" alt="AICTE" />
                    </button>
                    <p>AICTE</p>
                </a>
                <a>
                    <button class="btn"id="btn2">
                        <img src="../images/internships/glassdoor.jpeg" alt="Glassdoor" />
                    </button>
                    <p>Glassdoor</p>
                </a>
                <a>
                    <button class="btn"id="btn3">
                        <img src="../images/internships/internshala.jpeg" alt="Internshala" />
                    </button>
                    <p>Internshala</p>
                </a>
                <a>
                    <button class="btn"id="btn4">
                        <img src="../images/internships/isti.jpeg" alt="ISTI Portal" />
                    </button>
                    <p>ISTI Portal</p>
                </a>
                <a>
                    <button class="btn"id="btn5">
                        <img src="../images/internships/indeed.jpeg" alt="Indeed" />
                    </button>
                    <p>Indeed</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/internships/linkedin.jpeg" alt="Linked In" />
                    </button>
                    <p>Linked In</p>
                </a>
                <a>
                    <button class="btn"id="btn7">
                        <img src="../images/internships/mindia.jpeg" alt="Monster India" />
                    </button>
                    <p>Monster India</p>
                </a>
                <a>
                    <button class="btn"id="btn8">
                        <img src="../images/internships/Nukriguru.jpeg" alt="Naukri Guru" />
                    </button>
                    <p>Naukri Guru</p>
                </a>
                <a>
                    <button class="btn"id="btn9">
                        <img src="../images/internships/shine.jpeg" alt="Shine" />
                    </button>
                    <p>Shine</p>
                </a>
                <a>
                    <button class="btn"id="btn10">
                        <img src="../images/internships/placementindia.jpeg" alt="Placement India" />
                    </button>
                    <p>Placement India</p>
                </a>
                <a>
                    <button class="btn"id="btn11">
                        <img src="../images/internships/unstop.jpeg" alt="Unstop" />
                    </button>
                    <p>Unstop</p>
                </a>
            </div>
            <script>
                // Button click event listeners to open external sites
                document.getElementById('btn1').addEventListener('click', () => {
                    window.open('https://internship.aicte-india.org/?homescreen=1', '_blank'); // Opens Google in a new tab
                });

                document.getElementById('btn2').addEventListener('click', () => {
                    window.open('https://www.glassdoor.co.in/Community/index.htm', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn3').addEventListener('click', () => {
                    window.open('https://internshala.com/internships/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn4').addEventListener('click', () => {
                    window.open('https://www.indiascienceandtechnology.gov.in/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn5').addEventListener('click', () => {
                    window.open('https://in.indeed.com/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn6').addEventListener('click', () => {
                    window.open('https://www.linkedin.com/in/ashish-sarda-5051982a3/', '_blank'); // Opens YouTube in a new tab
                });
                
                document.getElementById('btn7').addEventListener('click', () => {
                    window.open('https://www.foundit.in/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn8').addEventListener('click', () => {
                    window.open('https://www.naukriguru.com/index.php', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn9').addEventListener('click', () => {
                    window.open('https://www.shine.com/?utm_source=m_web_app', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn10').addEventListener('click', () => {
                    window.open('https://www.placementindia.com/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn11').addEventListener('click', () => {
                    window.open('https://unstop.com/?launcher=true', '_blank'); // Opens YouTube in a new tab
                });
            </script>
            <div class="transparent-bg">
                <br>
                <h1>Designed & Developed By DIGIca</h1>
            </div>
        </div>
    </div>

</body>
</html>
