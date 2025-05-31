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
    <link rel="stylesheet" href="css/interviewpr.css"> <!-- Ensure the path is correct -->
</head>
<body>
    
    <div class="container">
        <div class="home-content">
            <div class="header">
                <h1>Choose Category to Prepare....</h1>
            </div>
            <div class="buttons">
                <a>
                    <button class="btn"id="btn1">
                        <img src="../images/interview/cv.jpeg" alt="AccuWeb"class="image-button"data-images='[
                            {"src": "../images/interview/cv/Zety.png","alt":"Zety", "link": "https://zety.com/","text": "Zety" },
                            {"src": "../images/interview/cv/NovoResume.png","alt":"NovoResume", "link": "https://novoresume.com/","text": "NovoResume"},
                            {"src": "../images/interview/cv/Resumonk.png","alt":"Resumonk", "link": "https://www.resumonk.com/","text": "Resumonk"},
                            {"src": "../images/interview/cv/resumeio.png","alt":"Resume.io", "link": "https://resume.io/","text": "Resume.io"},
                            {"src": "../images/interview/cv/Enhancv.png", "alt":"Enhancv","link": "https://enhancv.com/","text": "Enhncv"},
                            {"src": "../images/interview/cv/Job_Scan.png","alt":"Job Scan", "link": "https://www.jobscan.co/","text": "Job Scan"},
                            {"src": "../images/interview/cv/Top_Resume.png","alt":"Top Resume", "link": "https://topresume.com/","text": "Top Resume"},
                            {"src": "../images/interview/cv/My_Perfect_Resume.png","alt":"Myp erfect Resume", "link": "https://www.myperfectresume.com/","text": "My Perfect Resume"},
                            {"src": "../images/interview/cv/Visual_Cv.png","alt":"Visual Cv", "link": "https://www.visualcv.com/","text": "Visual Cv"},
                            {"src": "../images/interview/cv/Cake_Resume.png","alt":"Cake Resume", "link": "https://www.cake.me/","text": "Cake Resume"},
                            {"src": "../images/interview/cv/Reddit.png","alt":"Reddit", "link": "https://www.reddit.com/r/resumes/","text": "Reddit"}
                            ]'/>
                    </button>
                    <p>CV & Cover Letter Making</p>
                </a>
                <a>
                    <button class="btn"id="btn2">
                        <img src="../images/interview/platform.jpeg" alt="Infinity Free"class="image-button"data-images='[
                            {"src": "../images/interview/cv.jpeg", "link": "https://example.com/page4"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"}
                            ]' />
                    </button>
                    <p>Platform Strategies</p>
                </a>
                <a>
                    <button class="btn"id="btn3">
                        <img src="../images/interview/aptitude.jpeg" alt="Ms Azure"class="image-button"data-images='[
                           {"src": "../images/interview/apti/Prepinsta.png","alt":"PrepInsta", "link": "https://prepinsta.com/","text": "PrepInsta" },
                            {"src": "../images/interview/apti/HackerRank.png","alt":"hakkerrank", "link": "https://www.hackerrank.com/","text": "hakkerrank"},
                            {"src": "../images/interview/apti/codesingle.png","alt":"CodeSingle", "link": "https://codesignal.com/learn/","text": "CodeSingle"},
                            {"src": "../images/interview/apti/leetcode.png","alt":"Leetcode", "link": "https://leetcode.com/","text": "Leetcode"},
                            {"src": "../images/interview/apti/InterviewBit.png", "alt":"InterviewBit","link": "https://www.interviewbit.com/","text": "InterviewBit"},
                            {"src": "../images/interview/apti/topcoder.png","alt":"Top Coder", "link": "https://www.topcoder.com/","text": "Top Coder"},
                            {"src": "../images/interview/apti/geeks_for_geeks.png","alt":"Geeks For Geeks", "link": "https://www.geeksforgeeks.org/","text": "Geeks For Geeks"},
                            {"src": "../images/interview/apti/coding_Ninjas.png","alt":"Coding Ninjas", "link": "https://www.codingninjas.com/","text": "Coding Ninjas"},
                            {"src": "../images/interview/apti/AMCAT.png","alt":"AMCAT", "link": "https://www.myamcat.com/","text": "AMCAT"},
                            {"src": "../images/interview/apti/eLitmus.png","alt":"eLitmus", "link": "https://www.elitmus.com/","text": "eLitmus"},
                            {"src": "../images/interview/apti/CoCubes.png","alt":"CoCubes", "link": "https://www.cocubes.com/","text": "CoCubes"},
                            {"src": "../images/interview/apti/IndiaBix.png","alt":"IndiaBix", "link": "https://www.indiabix.com/","text": "IndiaBIX"},
                            {"src": "../images/interview/apti/TestBook.png","alt":"TestBook", "link": "https://testbook.com/index.html","text": "Testbook"},
                            {"src": "../images/interview/apti/SHL.png","alt":"SHL", "link": "https://www.shl.com/shldirect/en/practice-tests/","text": "SHL Global"},
                            {"src": "../images/interview/apti/Talent_Q.png","alt":"Talent Q", "link": "https://www.trytalentq.com/","text": "Talent Q Global"},
                            {"src": "../images/interview/apti/Pymetrics.png","alt":"Pymetrics", "link": "https://www.pymetrics.com/login/#","text": "Pymetrics Gameify"},
                            {"src": "../images/interview/apti/Codility.png","alt":"Codility", "link": "https://www.codility.com/","text": "Codility Gameify"},
                            {"src": "../images/interview/apti/ATCoder.png","alt":"ATCoder", "link": "https://atcoder.jp/","text": "ATCoder COM Progra.."},
                            {"src": "../images/interview/apti/CodeChef.png","alt":"CodeChef", "link": "https://www.codechef.com/dashboard","text": "CodeChef COM Progra.."},
                            {"src": "../images/interview/apti/Kaggle.png","alt":"Kaggle", "link": "https://www.kaggle.com","text": "Kaggle COM Progra.."},
                            {"src": "../images/interview/apti/Turing.png","alt":"Turing", "link": "https://www.turing.com/jobs","text": "Turing For Remote Jobs"},
                            {"src": "../images/interview/apti/TripleByte.png","alt":"TripleByte", "link": "https://connect.karat.com/tb-welcome","text": "Triplebyte For Remote Jobs"},
                            {"src": "../images/interview/apti/CoCubes.png","alt":"Cocubes", "link": "https://www.cocubes.com","text": "CoCubes"},
                            {"src": "../images/interview/apti/Quizezz.png","alt":"Quizizz", "link": "https://quizizz.com/?lng=en","text": "Quizizz APP"},
                            {"src": "../images/interview/apti/Codemonk.png","alt":"Codemonk", "link": "https://www.hackerearth.com/practice/codemonk/","text": "CodeMonk APP"},
                            {"src": "../images/interview/apti/datacamp.png","alt":"datacamp", "link": "https://www.datacamp.com/","text": "DataCamp For AIDS"},
                            {"src": "../images/interview/apti/MachineHack.png","alt":"MachineHack", "link": "https://machinehack.com/","text": "MachineHack For AIDS"}
                            ]'/>
                    </button>
                    <p>Aptitude tests</p>
                </a>
                <a>
                    <button class="btn"id="btn4">
                        <img src="../images/interview/wat.jpeg" alt="PythonAnyWhere"class="image-button"data-images='[
                            {"src": "../images/interview/cv.jpeg", "link": "https://example.com/page4"},
                            {"src": "image5.jpg","alt":"Prepinsta", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"}
                            ]' />
                    </button>
                    <p>Written Ability Tests</p>
                </a>
                <a>
                    <button class="btn"id="btn5">
                        <img src="../images/interview/casestudy.jpeg" alt="WordPress"class="image-button"data-images='[
                            {"src": "../images/interview/cv.jpeg", "link": "https://example.com/page4"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"}
                            ]'/>
                    </button>
                    <p>Case Study Rounds</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/interview/guesstimate.jpeg" alt="Blogger"class="image-button"data-images='[
                            {"src": "../images/interview/cv.jpeg", "link": "https://example.com/page4"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"}
                            ]' />
                    </button>
                    <p>Guesstimet Round</p>
                </a>
                <a>
                    <button class="btn"id="btn7">
                        <img src="../images/interview/gd.jpeg" alt="Blogger"class="image-button" data-images='[
                            {"src": "../images/interview/cv.jpeg", "link": "https://example.com/page4"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"}
                            ]'/>
                    </button>
                    <p>Group Discussion</p>
                </a>
                <a>
                    <button class="btn"id="btn8">
                        <img src="../images/interview/aiinterview.jpeg" alt="Blogger"class="image-button" data-images='[
                            {"src": "../images/interview/cv.jpeg", "link": "https://example.com/page4"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"}
                            ]'/>
                    </button>
                    <p>AI Interview Round</p>
                </a>
                <a>
                    <button class="btn"id="btn9">
                        <img src="../images/interview/technicalround.jpeg" alt="Blogger"class="image-button"data-images='[
                            {"src": "../images/interview/cv.jpeg", "link": "https://example.com/page4"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"}
                            ]' />
                    </button>
                    <p>Technical Round</p>
                </a>
                <a>
                    <button class="btn"id="btn10">
                        <img src="../images/interview/hrround.jpeg" alt="Blogger"class="image-button"data-images='[
                            {"src": "../images/interview/cv.jpeg", "link": "https://example.com/page4"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"},
                            {"src": "image5.jpg", "link": "https://example.com/page5"}
                            ]' />
                    </button>
                    <p>HR Rounds</p>
                </a>
                <a>
                    <button class="btn"id="btn11">
                        <img src="../images/interview/beahavioural.jpeg" alt="Blogger"class="image-button"data-images='[
                            {"src": "../images/interview/cv.jpeg",alt="Zety", "link": "https://zety.com/"},
                            {"src": "image5.jpg",alt="NovoResume", "link": "https://novoresume.com/"},
                            {"src": "image5.jpg",alt="Resumonk", "link": "https://www.resumonk.com/"},
                            {"src": "image5.jpg",alt="Resume.io", "link": "https://resume.io/"},
                            {"src": "image5.jpg", alt="Enhancv","link": "https://enhancv.com/"},
                            {"src": "image5.jpg",alt="Job Scan", "link": "https://www.jobscan.co/"},
                            {"src": "image5.jpg",alt="Top Resume", "link": "https://topresume.com/"},
                            {"src": "image5.jpg",alt="Myp erfect Resume", "link": "https://www.myperfectresume.com/"},
                            {"src": "image5.jpg",alt="Visual Cv", "link": "https://www.visualcv.com/"},
                            {"src": "image5.jpg",alt="Cake Resume", "link": "https://www.cake.me/"},
                            {"src": "image5.jpg",alt="Reddit", "link": "https://www.reddit.com/r/resumes/"}
                            ]'/>
                    </button>
                    <p>Behavioural Round</p>
                </a>
               
            </div>
            <!-- Modal (Floating Window) -->
            <div class="modal-overlay"></div>
            <div class="modal" id="floatingWindow">
                <h1>Choose Which Platfom to Use</h1>
                <button class="modal-close" onclick="closeModal()">Close</button>
                <div class="modal-content" id="modalContent">
                    <!-- Dynamic content goes here -->
                </div>
            </div>
            <script>
                // References to modal and overlay
                const modal = document.getElementById("floatingWindow");
                const modalOverlay = document.querySelector(".modal-overlay");
                const modalContent = document.getElementById("modalContent");

                // Function to open modal and display images with text and links
                function openModal(images) {
                    modalContent.innerHTML = ""; // Clear previous content

                    // Add new images, text, and links to the modal
                    images.forEach(({ src, link, text }) => {
                        const container = document.createElement("div");
                        container.className = "image-text-container";

                        const anchor = document.createElement("a");
                        anchor.href = link; // Set link
                        anchor.target = "_blank"; // Open in a new tab

                        const img = document.createElement("img");
                        img.src = src;
                        img.alt = "Dynamic Image";

                        const description = document.createElement("p");
                        description.textContent = text; // Add the text

                        anchor.appendChild(img);
                        container.appendChild(anchor);
                        container.appendChild(description);
                        modalContent.appendChild(container);
                    });

                    modal.style.display = "block";
                    modalOverlay.style.display = "block";
                }

                // Function to close modal
                function closeModal() {
                    modal.style.display = "none";
                    modalOverlay.style.display = "none";
                }

                // Event listeners for image buttons
                document.querySelectorAll(".image-button").forEach((button) => {
                    button.addEventListener("click", () => {
                        const images = JSON.parse(button.getAttribute("data-images")); // Get associated images with links and text
                        openModal(images);
                    });
                });

                // Close modal when clicking outside it
                modalOverlay.addEventListener("click", closeModal);
            </script>

            <div class="transparent-bg">
                <h1>Designed & Developed By DIGIca</h1>
            </div>
        </div>
    </div>

</body>
</html>
