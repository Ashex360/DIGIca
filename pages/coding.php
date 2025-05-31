how to fetch img,title text and decription with favourite or unfavorite option fro db in the below code <?php 
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
    <link rel="stylesheet" href="css/coding.css"> <!-- Ensure the path is correct -->
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
                        <img src="../images/coding/codechef.jpeg" alt="Coding Practice" />
                    </button>
                    <p>Code Chef</p>
                    <p>Where You Can Learn,Practice & Compete</p>
                </a>
                <a>
                    <button class="btn"id="btn2">
                        <img src="../images/coding/codeforces.jpeg" alt="Aptitude Practice" />
                    </button>
                    <p>Code Forces</p>
                </a>
                <a>
                    <button class="btn"id="btn3">
                        <img src="../images/coding/hakkerrank.jpeg" alt="Learn Something" />
                    </button>
                    <p>Hackerrank</p>
                    <p>Where You Can Prepare,Certify,Compete And Apply</p>
                </a>
                <a>
                    <button class="btn"id="btn4">
                        <img src="../images/coding/hakkerearth.jpeg" alt="Internships" />
                    </button>
                    <p>Hacker Earth</p>
                </a>
                <a>
                    <button class="btn"id="btn5">
                        <img src="../images/coding/leetcode.jpeg" alt="Improve Communication" />
                    </button>
                    <p>Leet Code</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/coding/topcoder.jpeg" alt="Manage Hosting" />
                    </button>
                    <p>Top Coder</p>
                </a>
            </div>
            <script>
                // Button click event listeners to open external sites
                document.getElementById('btn1').addEventListener('click', () => {
                    window.open('https://www.codechef.com/learn', '_blank'); // Opens Google in a new tab
                });

                document.getElementById('btn2').addEventListener('click', () => {
                    window.open('https://codeforces.com/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn3').addEventListener('click', () => {
                    window.open('https://www.hackerrank.com/dashboard', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn4').addEventListener('click', () => {
                    window.open('https://www.hackerearth.com/practice/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn5').addEventListener('click', () => {
                    window.open('https://leetcode.com/explore/', '_blank'); // Opens YouTube in a new tab
                });

                document.getElementById('btn6').addEventListener('click', () => {
                    window.open('https://talent-search.topcoder.com/', '_blank'); // Opens YouTube in a new tab
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
