<?php header('Content-Type: text/html'); // Set the content type to HTML ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* General Reset */
/* Horizontal Navbar */
        .navbar {
            width: 100%;
            height: 60px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            border-bottom: 1px solid #ddd;
            position: fixed;
            top: 0;
            z-index: 999;
            left:0;
        }

        .navbar .left-menu,
        .navbar .right-menu {
            display: flex;
            align-items: center;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: purple;
        }
        .navbar .brand-name{
            margin-top:8px;
            margin-left:2%;
        }
        .navbar .brand-name span {
            margin-top:5px;
            color:purple;
            position: absolute;
            transform: translateX(-50%);
            font-size: 1.8em;
            font-weight: bold;
        }
        .navbar .brand-name img {
            height: 40px;
            width: 40px;
            border-radius: 50%; /* Optional: Makes the logo circular */
            margin-right:50px;
        }

        .navbar .right-menu {
            margin-left: auto;
            margin-right:30px;
            position: relative; /* Required for the dropdown to position relative to the icon */
        }

        .navbar .right-menu i {
            font-size: 20px;
            margin: 0 8px;
            cursor: pointer;
        }

        /* Notification Dropdown */
        .notification-dropdown {
            position: absolute;
            top: 50px;
            right: 10px;
            width: 300px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1000;
        }

        .notification-dropdown.active {
            display: block;
        }

        .notification-dropdown h3 {
            font-size: 16px;
            padding: 10px;
            background: #f1f1f1;
            border-bottom: 1px solid #ddd;
            margin: 0;
        }

        .notification-dropdown ul {
            list-style: none;
            max-height: 200px;
            overflow-y: auto;
            margin: 0;
            padding: 10px;
        }

        .notification-dropdown ul li {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .notification-dropdown ul li:hover {
            background: #f9f9f9;
        }

        .notification-dropdown ul li:last-child {
            border-bottom: none;
        }

        .notification-dropdown ul li a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }

        .notification-dropdown ul li a:hover {
            color: purple;
        }


        /* Sidebar */
        .sidebar {
            width:250px;
            height: calc(100% - 60px);
            background: #fff;
            border-right: 1px solid #ddd;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            transition: width 0.3s ease;
            position: fixed;
            top:60px;
            left:0;
            z-index: 999; 
            overflow:auto;
        }

        .sidebar.collapsed {
            width: 70px;
        }
        .sidebar.collapsed.home-content {
            margin-left:70px;
        }

        .sidebar .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            transition: opacity 0.3s ease;
        }

        .sidebar.collapsed .logo {
            opacity: 0;
        }

        .sidebar a {
            width:auto;
            display: flex;
            align-items: center;
            padding: 10px;
            color: #333;
            font-size: 18px;
            margin: 3px 0;
            border-radius: 10px;
            text-decoration: none;
            transition: background 0.3s, color 0.3s ease;
        }

        .sidebar a:hover {
            background: #efefef;
        }
        .sidebar:focus {
            outline: none;
            border-color: #007BFF; /* Highlight border on focus */
        }

        .sidebar a i {
            margin-right: 15px;
            font-size: 20px;
            transition: margin-right 0.3s ease;
            margin-left: 15px;
        }

        .sidebar.collapsed a i {
            margin-right: 0;
        }

        .sidebar a span {
            white-space: nowrap;
            transition: opacity 0.3s ease;
        }

        .sidebar.collapsed a span {
            opacity: 0;
        }

        /* Hamburger Menu */
        .hamburger {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            cursor: pointer;
            z-index: 1000;
        }

        .sidebar.collapsed + .hamburger {
            left: 70px;
        }
        .active {
            font-weight: bold;
            background: #ddd;
            color: purple;
            border-left: 8px solid purple;
        }
        .navbar .brand-name{
            margin-top:4px;
            margin-left:2%;
        }
        .navbar .brand-name span {
            margin-top:5px;
            color:purple;
            position: absolute;
            transform: translateX(-50%);
            font-size: 1.8em;
            font-weight: bold;
        }
        .navbar .brand-name img {
            height: 40px;
            width: 40px;
            border-radius: 50%; /* Optional: Makes the logo circular */
            margin-right:50px;
            margin-left:20px;
        }
        .navbar .right-menu {
            margin-left: auto;
            margin-right:20px;
            position: relative; /* Required for the dropdown to position relative to the icon */
        }




        /* Responsive Design */
        @media (max-width: 768px) {
            /* Sidebar */
            .sidebar {
                width:55px;
                height: calc(100% - 60px);
                background: #fff;
                border-right: 1px solid #ddd;
                flex-direction: column;
                align-items: center;
                padding-top: 20px;
                transition: width 0.3s ease;
                position: fixed;
                top:60px;
                left:0;
                z-index: 999; 
                overflow:auto;
                font-weight: bold;
                color: purple;
                border-left: 8px solid purple;
            }


            .sidebar .logo {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 30px;
                transition: opacity 0.3s ease;
            }

            .sidebar a {
                width:auto;
                display: flex;
                align-items: center;
                padding: 10px;
                color: #333;
                font-size: 18px;
                margin: 3px 0;
                border-radius: 10px;
                text-decoration: none;
                transition: background 0.3s, color 0.3s ease;
            }

            .sidebar a:hover {
                background: #efefef;
            }
            .sidebar:focus {
                outline: none;
                border-color: #007BFF; /* Highlight border on focus */
            }

            .sidebar a i {
                margin-right: 20px;
                font-size: 20px;
                transition: margin-right 0.3s ease;
                margin-left: 10px;
            }




        }
    </style>
    <div class="navbar">
        <div class="left-menu">
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="brand-name">
            <img src="../images/DIGIca.png" alt="Digica">
            <span>DIGIca</span>
        </div>
        <div class="right-menu">
            <a href="index.php"><i class="fas fa-home"></i></a>
            <a href="#" id="notificationIcon"><i class="fas fa-bell"></i></a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>

            <!-- Notification Dropdown -->
            <div class="notification-dropdown" id="notificationDropdown">
                <h3>Notifications</h3>
                <ul>
                    <li><a href="#">New message from John</a></li>
                    <li><a href="#">Your order has been shipped</a></li>
                    <li><a href="#">Reminder: Meeting at 3 PM</a></li>
                    <li><a href="#">Update: System maintenance</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="sidebar" id="sidebar" role="navigation">
        <a id="index" href="index.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a id="coding" href="coding.php"><i class="fas fa-code"></i><span>Coding</span></a>
        <a id="learning" href="learning.php"><i class="fas fa-laptop-code"></i><span>Learning</span></a>
        <a id="interview" href="interview.php"><i class="fa-solid fa-brain"></i><span>Interview PR</span></a>
        <a id="roadmaps" href="roadmaps.php"><i class="fas fa-sitemap"></i><span>Career Maps</span></a>
        <a id="etrends" href="etrends.php"><i class="fas fa-arrow-trend-up"></i><span>Emerging Trends</span></a>
        <a id="sidework" href="sidework.php"><i class="fa-brands fa-youtube"></i><span>Side Work</span></a>
        <a id="internships" href="internships.php"><i class="fa-brands fa-invision"></i><span>Internships</span></a>
        <a id="hosting" href="hosting.php"><i class="fa-brands fa-ioxhost"></i><span>Hosting</span></a>
        <a id="ReWProb" href="rewprobs.php"><i class="fa-solid fa-earth-asia"></i><span>Real World Problems</span></a>
        <a id="industry" href="industry.php"><i class="fa-solid fa-earth-asia"></i><span>Industry Projects</span></a>
        <a id="myprojects" href="myprojects.php"><i class="fa-solid fa-folder-open"></i><span>Your Projects</span></a>
        <a id="myportfolio" href="myportfolio.php"><i class="fa-solid fa-folder-open"></i><span>Your Portfolio</span></a>
        <a id="profile" href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a>
    </div>
    <script>
        const hamburger = document.querySelector('.hamburger');
        const sidebar = document.querySelector('.sidebar');

        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            if (window.innerWidth <= 768) {
                sidebar.classList.toggle('active');
            }
        });
        window.onload = function() {
            const currentPage = window.location.pathname.split("/").pop();
            const links = {
                "index.php": document.getElementById("index"),
                "coding.php": document.getElementById("coding"),
                "interview.php": document.getElementById("interview"),
                "learning.php": document.getElementById("learning"),
                "internships.php": document.getElementById("internships"),
                "hosting.php": document.getElementById("hosting"),
                "roadmaps.php": document.getElementById("roadmaps"),
                "etrends.php": document.getElementById("etrends"),
                "sidework.php": document.getElementById("sidework"),
                "rewprobs.php": document.getElementById("ReWProb"),
                "profile.php": document.getElementById("profile"),
                "settings.php": document.getElementById("settings"),
                "myprojects.php": document.getElementById("myprojects"),
                "myportfolio.php": document.getElementById("myportfolio"),
                "logout.php": document.getElementById("logout")
            };
            if (links[currentPage]) {
                links[currentPage].classList.add("active");
            }
        };

    </script>
    <script>
        // Handle Notification Dropdown Toggle
        const notificationIcon = document.getElementById('notificationIcon');
        const notificationDropdown = document.getElementById('notificationDropdown');

        notificationIcon.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default anchor click behavior
            notificationDropdown.classList.toggle('active');
        });

        // Close dropdown when clicking outside
        window.addEventListener('click', (e) => {
            if (!notificationDropdown.contains(e.target) && e.target !== notificationIcon) {
                notificationDropdown.classList.remove('active');
            }
        });
    </script>
