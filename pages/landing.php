<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIGIca - Unlock Engineering Excellence</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #f9f9f9, #e0e7ff);
            color: #333;
        }

        header {
            color: linear-gradient(90deg, white, #28a745);
            background: linear-gradient(90deg, #007BFF, #6610f2);
            background-image:url('../images/header.jpg');
            text-align: center;
            padding: 30px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            
        }

        header h1 {
            color:white;
            font-size: 3.5em;
            margin: 0;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        header p {
            color:orange;
            font-size: 1.1em;
            margin-top: 10px;
        }

        main {
            text-align: center;
            padding: 50px 20px;
        }

        h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #007BFF, #28a745);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            font-size: 1.1em;
            margin-bottom: 30px;
            line-height: 1.8;
            color: #555;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }

        .feature-card {
            background: linear-gradient(145deg, #ffffff, #f1f1f1);
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: left;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .feature-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
            background: linear-gradient(90deg, #6610f2, #28a745);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .feature-card p {
            font-size: 1em;
            color: #666;
        }

        .cta-container {
            margin-top: 40px;
        }

        .btn {
            background: linear-gradient(45deg, #28a745, #007BFF);
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.2em;
            font-weight: bold;
            transition: background 0.3s, transform 0.2s;
            margin: 10px;
            display: inline-block;
        }

        .btn:hover {
            background: linear-gradient(45deg, #007BFF, #28a745);
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: linear-gradient(90deg, #333, #555);
            color: #fff;
            font-size: 1em;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
            color:white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .feature-card {
                width: 90%;
            }

            h2 {
                font-size: 2em;
            }

            header h1 {
                font-size: 2.5em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>DIGIca</h1>
        <p>Your Gateway to the Best Tools, Platforms, and Resources</p>
    </header>

    <main class="main">
        <h2>Empowering Engineering Students</h2>
        <p>Welcome to DIGIca, a platform designed to connect engineering students with the latest tools, websites, and platforms that can boost your preparation for a high-paying job. Explore the possibilities and unlock your true potential.</p>

        <div class="features">
            <div class="feature-card">
                <h3>Coding Tools</h3>
                <p>Access platforms to enhance your coding skills with real-time practice and challenges.</p>
            </div>
            <div class="feature-card">
                <h3>Interview Prep</h3>
                <p>Prepare for technical and HR interviews with expert tips, resources, and mock tests.</p>
            </div>
            <div class="feature-card">
                <h3>Career Roadmaps</h3>
                <p>Get step-by-step guidance tailored to your dream job in the tech industry.</p>
            </div>
            <div class="feature-card">
                <h3>Project Ideas</h3>
                <p>Discover innovative project ideas to add value to your resume and portfolio.</p>
            </div>
            <div class="feature-card">
                <h3>Side Hustles</h3>
                <p>Find opportunities for internships, freelancing, and part-time jobs to gain experience.</p>
            </div>
            <div class="feature-card">
                <h3>Latest Tools</h3>
                <p>Stay updated with cutting-edge tools and platforms essential for engineering students.</p>
            </div>
        </div>

        <div class="cta-container">
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
        </div>
    </main>

    <footer>
        <p>© 2025 DIGIca - All Rights Reserved</p>
    </footer>
</body>
</html>
