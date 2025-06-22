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
    <link rel="stylesheet" href="css/etrends.css"> <!-- Ensure the path is correct -->
</head>
<body>
    
    <div class="container">
        <div class="home-content">
            <div class="header">
                <h1>Choose Trend To Know More..</h1>
            </div>
            <div class="buttons">
                <a>
                    <button class="btn"id="btn1">
                        <img src="../images/etrends/fullstack.jpeg" alt="AccuWeb"onclick="openModal('button1')" />
                    </button>
                    <p>Full Stack Developement</p>
                </a>
                <a>
                    <button class="btn"id="btn2">
                        <img src="../images/etrends/aiml.jpeg" alt="Infinity Free"onclick="openModal('button2')" />
                    </button>
                    <p>AI & ML</p>
                </a>
                <a>
                    <button class="btn"id="btn3">
                        <img src="../images/etrends/ds2.jpeg" alt="Ms Azure"onclick="openModal('button3')" />
                    </button>
                    <p>Data Science</p>
                </a>
                <a>
                    <button class="btn"id="btn4">
                        <img src="../images/etrends/python.jpeg" alt="PythonAnyWhere" onclick="openModal('button4')"/>
                    </button>
                    <p>Python</p>
                </a>
                <a>
                    <button class="btn"id="btn5">
                        <img src="../images/etrends/aitools.jpeg" alt="WordPress"onclick="openModal('button5')" />
                    </button>
                    <p>AI Tools</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/etrends/robotics.jpeg" alt="Blogger"onclick="openModal('button6')" />
                    </button>
                    <p>Robotics</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/etrends/prompt.jpeg" alt="Blogger"onclick="openModal('button7')" />
                    </button>
                    <p>Prompt Engineering</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/etrends/java.jpeg" alt="Blogger"onclick="openModal('button8')" />
                    </button>
                    <p>Java Programming</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/etrends/iot.jpeg" alt="Blogger"onclick="openModal('button9')" />
                    </button>
                    <p>IoT</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/etrends/cc.jpeg" alt="Blogger"onclick="openModal('button10')" />
                    </button>
                    <p>Cloud Computing</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/etrends/dsa.jpeg" alt="Blogger"onclick="openModal('button11')" />
                    </button>
                    <p>DSA</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/etrends/dataan.jpeg" alt="Blogger"onclick="openModal('button12')" />
                    </button>
                    <p>Data Analyst</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/etrends/cybersecurity.jpeg" alt="Blogger"onclick="openModal('button13')" />
                    </button>
                    <p>Cyber Security & Ethical Hacking</p>
                </a>
                <a>
                    <button class="btn"id="btn6">
                        <img src="../images/etrends/selfcars.jpeg" alt="Blogger"onclick="openModal('button14')" />
                    </button>
                    <p>Self Driving Cars & Electric Vehicals</p>
                </a>
            </div>
            <!-- Modal -->
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <div id="modal-body">
                        <!-- Dynamic content will be displayed here -->
                    </div>
                </div>
            </div>
            <script>
                function openModal(button) {
                    const contentMap = {
                        'button1': '<h1>Full Stack Development Roadmap</h1> <br> <h2>1. Foundation Phase</h2> <ul> <li>Learn HTML & CSS</li> <li>JavaScript</li> </ul> <br><h2>2. Frontend Development</h2> <ul> <li>CSS Frameworks (Bootstrap, Tailwind)</li> <li>JavaScript Libraries & Frameworks (React, Angular, Vue.js)</li> </ul> <br><h2>3. Backend Development</h2> <ul> <li>Learn a Backend Language (Node.js, Python, Ruby, PHP)</li> <li>Understand Databases (SQL: MySQL, PostgreSQL; NoSQL: MongoDB)</li> <li>APIs (RESTful APIs)</li> </ul><br> <h2>4. Version Control</h2> <ul> <li>Git (GitHub)</li> </ul><br> <h2>5. DevOps Basics</h2> <ul> <li>Command Line</li> <li>Deployment (Heroku, Netlify, Vercel)</li> </ul> <br><h2>6. Build Projects</h2> <ul> <li>Portfolio Website</li> <li>Clone Projects</li> <li>Original Projects</li> </ul><br> <h2>7. Learning Resources</h2> <ul> <li>Online Courses (Codecademy, freeCodeCamp, Udemy, Coursera)</li> <li>Books & Blogs (Eloquent JavaScript)</li> </ul> <br><h2>8. Stay Updated</h2> <ul> <li>Communities (Stack Overflow, Reddit, GitHub)</li> <li>Continuous Learning</li> </ul> <br><h2>9. Get Experience</h2> <ul> <li>Internships</li> <li>Freelancing</li> </ul><br> <h2>10. Soft Skills</h2> <ul> <li>Communication</li> <li>Problem Solving</li> </ul>',
                        'button2': '<h1>AI and Machine Learning Roadmap</h1> <br><h2>1. Foundation Phase</h2> <ul> <li>Mathematics (Linear Algebra, Calculus, Probability, Statistics)</li> <li>Programming (Python is highly recommended)</li> </ul> <br><h2>2. Basics of Machine Learning</h2> <ul> <li>Supervised Learning</li> <li>Unsupervised Learning</li> <li>Reinforcement Learning</li> </ul> <br><h2>3. Key Libraries and Frameworks</h2> <ul> <li>NumPy, Pandas, Matplotlib, Seaborn</li> <li>Scikit-Learn</li> <li>TensorFlow, Keras, PyTorch</li> </ul> <br><h2>4. Data Preprocessing</h2> <ul> <li>Data Cleaning</li> <li>Feature Engineering</li> <li>Data Visualization</li> </ul> <br><h2>5. Machine Learning Algorithms</h2> <ul> <li>Linear Regression</li> <li>Logistic Regression</li> <li>Decision Trees, Random Forests</li> <li>Support Vector Machines</li> <li>K-Nearest Neighbors</li> <li>K-Means Clustering</li> <li>Principal Component Analysis</li> <li>Neural Networks</li> </ul> <br><h2>6. Model Evaluation</h2> <ul> <li>Cross-Validation</li> <li>Confusion Matrix, Precision, Recall, F1 Score</li> <li>ROC-AUC</li> </ul> <br><h2>7. Deep Learning</h2> <ul> <li>Neural Networks</li> <li>Convolutional Neural Networks (CNNs)</li> <li>Recurrent Neural Networks (RNNs)</li> <li>Generative Adversarial Networks (GANs)</li> </ul> <br><h2>8. Natural Language Processing (NLP)</h2> <ul> <li>Text Preprocessing</li> <li>Sentiment Analysis</li> <li>Text Generation</li> </ul> <br><h2>9. Real-world Projects</h2> <ul> <li>Data Analysis Projects</li> <li>Machine Learning Projects</li> <li>Deep Learning Projects</li> </ul> <br><h2>10. Learning Resources</h2> <ul> <li>Online Courses (Coursera, edX, Udacity, DataCamp)</li> <li>Books (Hands-On Machine Learning with Scikit-Learn, Keras, and TensorFlow; Deep Learning by Ian Goodfellow)</li> <li>Blogs and YouTube Channels</li> </ul> <br><h2>11. Stay Updated</h2> <ul> <li>Research Papers</li> <li>Conferences (NIPS, ICML, CVPR)</li> <li>Communities (Kaggle, Stack Overflow, Reddit)</li> </ul> <br><h2>12. Get Experience</h2> <ul> <li>Internships</li> <li>Competitions (Kaggle)</li> <li>Freelancing</li> </ul>',
                        'button3': '<h1>Data Science Roadmap</h1> <br> <h2>1. Foundation Phase</h2> <ul> <li>Mathematics (Linear Algebra, Calculus, Probability, Statistics)</li> <li>Programming (Python/R is highly recommended)</li> </ul><br> <h2>2. Data Manipulation</h2> <ul> <li>Data Collection (Web Scraping, APIs)</li> <li>Data Cleaning (Handling missing values, data transformation)</li> <li>Data Exploration (Descriptive statistics, data visualization)</li> </ul><br> <h2>3. Key Libraries and Tools</h2> <ul> <li>Pandas</li> <li>NumPy</li> <li>Matplotlib</li> <li>Seaborn</li> </ul><br> <h2>4. Data Visualization</h2> <ul> <li>Understand different types of visualizations (Bar charts, Histograms, Scatter plots, etc.)</li> <li>Tools (Matplotlib, Seaborn, Plotly)</li> </ul> <br><h2>5. Machine Learning</h2> <ul> <li>Supervised Learning (Regression, Classification)</li> <li>Unsupervised Learning (Clustering, Dimensionality Reduction)</li> <li>Reinforcement Learning (Basics)</li> </ul><br> <h2>6. Machine Learning Libraries</h2> <ul> <li>Scikit-Learn</li> <li>TensorFlow</li> <li>Keras</li> <li>PyTorch</li> </ul><br> <h2>7. Model Evaluation and Tuning</h2> <ul> <li>Cross-Validation</li> <li>Hyperparameter Tuning</li> <li>Model Evaluation Metrics (Precision, Recall, F1 Score, ROC-AUC)</li> </ul><br> <h2>8. Big Data Technologies</h2> <ul> <li>Hadoop</li> <li>Spark</li> </ul><br> <h2>9. Real-world Projects</h2> <ul> <li>Exploratory Data Analysis (EDA) Projects</li> <li>Machine Learning Projects</li> <li>Big Data Projects</li> </ul><br> <h2>10. Learning Resources</h2> <ul> <li>Online Courses (Coursera, edX, Udacity, DataCamp)</li> <li>Books (Python for Data Analysis by Wes McKinney; Data Science for Business by Foster Provost and Tom Fawcett)</li> <li>Blogs and YouTube Channels</li> </ul><br> <h2>11. Stay Updated</h2> <ul> <li>Research Papers</li> <li>Conferences (KDD, ICDM, NIPS)</li> <li>Communities (Kaggle, Stack Overflow, Reddit)</li> </ul><br> <h2>12. Get Experience</h2> <ul> <li>Internships</li> <li>Competitions (Kaggle)</li> <li>Freelancing</li> </ul>',
                        'button4': '<h2>Content for Button 4</h2><p>This is some content for button 4.</p>',
                        'button5': '<h2>Content for Button 5</h2><p>This is some content for button 5.</p>',
                        'button6': '<h2>Content for Button 6</h2><p>This is some content for button 6.</p>',
                        'button7': '<h2>Content for Button 7</h2><p>This is some content for button 7.</p>',
                    };

                    const content = contentMap[button] || '<p>Invalid button clicked.</p>';
                    document.getElementById('modal-body').innerHTML = content;
                    document.getElementById('myModal').style.display = 'block';
                }

                function closeModal() {
                    document.getElementById('myModal').style.display = 'none';
                }

                // Close the modal if user clicks outside of it
                window.onclick = function(event) {
                    const modal = document.getElementById('myModal');
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                }
            </script>
            <div class="transparent-bg">
                <h1>Designed & Developed By DIGIca</h1>
            </div>
        </div>
    </div>

</body>
</html>
