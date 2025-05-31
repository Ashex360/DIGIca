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
    <link rel="stylesheet" href="css/sidework.css"> <!-- Ensure the path is correct -->
</head>
<body>
    
    <div class="container">
        <div class="home-content">
            <div class="header">
                <h1>Youtube Channels</h1>
            </div>
            <div class="buttons">
                <a href="https://www.youtube.com/channel/UCmZjKc6MmDeTjlsYc0msr3g">
                    <button class="btn"id="btn1">
                        <img src="../images/sidework/ytlogo.jpeg" alt="AccuWeb"onclick="showContent('button1')" />
                    </button>
                    <p>Hindi Beatz</p>
                </a>
                <a>
                    <button class="btn"id="btn2">
                        <img src="../images/sidework/ytlogo2.jpeg" alt="Infinity Free"onclick="showContent('button2')" />
                    </button>
                    <p>Mr.AI</p>
                </a>
                <a>
                    <button class="btn"id="btn3">
                        <img src="../images/sidework/ytlogo3.jpeg" alt="Ms Azure"onclick="openModal('button3')" />
                    </button>
                    <p>Jobs Marathi</p>
                </a>
            </div>
            <br>
            <div class="header">
                <h1>Freelancing Sites</h1>
            </div>
            <div class="buttons">
                <a href="https://www.upwork.com/">
                    <button class="btn"id="btn4">
                        <img src="../images/sidework/upwork.jpeg" alt="PythonAnyWhere" onclick="openModal('button4')"/>
                    </button>
                    <p>Upwork</p>
                </a>
                <a href="https://www.fiverr.com/">
                    <button class="btn"id="btn5">
                        <img src="../images/sidework/fiverr.jpeg" alt="WordPress"onclick="openModal('button5')" />
                    </button>
                    <p>Fiverr</p>
                </a>
                <a href="https://www.freelancer.com/">
                    <button class="btn"id="btn6">
                        <img src="../images/sidework/freelancer.jpeg" alt="Blogger"onclick="openModal('button6')" />
                    </button>
                    <p>Freelancer</p>
                </a>
                <a href="https://www.toptal.com/">
                    <button class="btn"id="btn6">
                        <img src="../images/sidework/toptal.jpeg" alt="Blogger"onclick="openModal('button7')" />
                    </button>
                    <p>Toptal</p>
                </a>
                <a href="https://www.peopleperhour.com/">
                    <button class="btn"id="btn6">
                        <img src="../images/sidework/peopleperhour.jpeg" alt="Blogger"onclick="openModal('button8')" />
                    </button>
                    <p>People Per Hour</p>
                </a>
                <a href="https://www.simplyhired.com/">
                    <button class="btn"id="btn6">
                        <img src="../images/sidework/simplyhired.jpeg" alt="Blogger"onclick="openModal('button9')" />
                    </button>
                    <p>SimplyHired</p>
                </a>
                <a href="https://www.workana.com/work">
                    <button class="btn"id="btn6">
                        <img src="../images/sidework/workana.jpeg" alt="Blogger"onclick="openModal('button10')" />
                    </button>
                    <p>Workana</p>
                </a>
                <a href="https://hubstafftalent.net/work">
                    <button class="btn"id="btn6">
                        <img src="../images/sidework/hubstaff.jpeg" alt="Blogger"onclick="openModal('button11')" />
                    </button>
                    <p>HubStaff Talent</p>
                </a>
            </div>
            <div class="transparent-bg">
                <h1>Designed & Developed By DIGIca</h1>
            </div>
        </div>
        <div class="contentafterclick" id="button1">
            <h2>ATS-Friendly Platforms</h2>
            <p>Here’s a list of platforms available for creating ATS-friendly resumes, CVs, and cover letters:</p>
            <ul>
                <li><strong>Resume Builders:</strong> Zety, Novoresume, Canva, Indeed Resume Builder</li>
                <li><strong>Cover Letter Builders:</strong> Zety Cover Letter Builder, Kickresume, LiveCareer</li>
                <li><strong>Online Writing Tools:</strong> Grammarly, Hemingway Editor, ProWritingAid</li>
                <li><strong>ATS Optimization Platforms:</strong> Jobscan, Resunate, SkillSyncer, TopResume</li>
                <li><strong>Document Platforms:</strong> Microsoft Word, Google Docs, Overleaf</li>
                <li><strong>Freelance Services:</strong> Fiverr, Upwork, ChatGPT</li>
            </ul>
        </div>
        <div class="contentafterclick" id="button2">
            <h2>Job Platforms and Strategies</h2>
            <p>Explore top job platforms and effective strategies for landing your dream job:</p>
            <ul>
                <li><strong>Top Job Platforms:</strong> LinkedIn, Indeed, Glassdoor, Monster, Naukri, and AngelList.</li>
                <li><strong>Networking Tips:</strong> Attend webinars, engage in LinkedIn discussions, and connect with industry professionals.</li>
                <li><strong>Profile Optimization:</strong> Ensure your LinkedIn and other profiles are updated with relevant skills and experiences.</li>
                <li><strong>Application Strategies:</strong> Tailor resumes and cover letters for each job. Use job keywords to pass ATS filters.</li>
                <li><strong>Skill Development:</strong> Take courses on platforms like Coursera, Udemy, or edX to enhance your qualifications.</li>
                <li><strong>Follow-Up:</strong> After applying, follow up with hiring managers to show your interest and initiative.</li>
            </ul>
        </div>
        <script>
            function showContent() {
                const content1 = document.getElementById("button1");
                content1.style.display = content1.style.display === "none" ? "block" : "none";
                const content2 = document.getElementById("button2");
                content2.style.display = content2.style.display === "none" ? "block" : "none";
            }
        </script>
    </div>

</body>
</html>
