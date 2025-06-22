<?php
include 'C:\xampp\htdocs\Tech_Mitra\includes\session.php';
include 'C:\xampp\htdocs\Tech_Mitra\db\db.php';
include 'C:\xampp\htdocs\Tech_Mitra\includes\sidebar.php';

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    die("You must be logged in to view this page.");
}

// Get logged-in user's ID
$user_id = $_SESSION['username']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Projects</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(120deg, #f9f9f9, #e0e7ff);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .container {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px 30px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-left:30%;
            margin-top:70px;
        }

        h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form input,
        .form textarea,
        .form button {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 14px;
            width: 100%;
        }

        .form textarea {
            resize: none;
        }

        .form button {
            background-color: #5c67f2;
            color: #ffffff;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form button:hover {
            background-color: #4a53cc;
        }

        .projects-list {
            margin-top: 20px;
        }

        .project-item {
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            position: relative;
        }

        .project-item h3 {
            margin: 0 0 10px;
            color: #222222;
            font-size: 18px;
        }

        .project-item p {
            margin: 5px 0;
            color: #555555;
            font-size: 14px;
        }

        .project-item button {
            background-color: #ff6b6b;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            font-size: 14px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            transition: background-color 0.3s ease;
        }

        .project-item button:hover {
            background-color: #e63946;
        }

        hr {
            border: none;
            border-top: 1px solid #eeeeee;
            margin: 15px 0;
        }
        @media (max-width:768px){
            body {
                font-family: 'Arial', sans-serif;
                background: linear-gradient(120deg, #f9f9f9, #e0e7ff);
                margin: 0;
                padding: 0;
                min-height: 100vh;
            }

            .container {
                background: linear-gradient(120deg, #f9f9f9, #d60a0a9e);
                border-radius: 10px;
                padding: 20px 30px;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                width: auto;
                margin-left:65px;
                margin-top:70px;
            }

            h1 {
                color: #333333;
                font-size: 24px;
                margin-bottom: 20px;
                text-align: center;
            }

            .form {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            .form input,
            .form textarea,
            .form button {
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ddd;
                font-size: 14px;
                width: 100%;
            }

            .form textarea {
                resize: none;
            }

            .form button {
                background-color: #5c67f2;
                color: #ffffff;
                border: none;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .form button:hover {
                background-color: #4a53cc;
            }

            .projects-list {
                margin-top: 20px;
            }

            .project-item {
                background-color: #f9f9f9;
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                padding: 15px;
                margin-bottom: 15px;
                position: relative;
            }

            .project-item h3 {
                margin: 0 0 10px;
                color: #222222;
                font-size: 18px;
            }

            .project-item p {
                margin: 5px 0;
                color: #555555;
                font-size: 14px;
            }

            .project-item button {
                background-color: #ff6b6b;
                color: #ffffff;
                border: none;
                border-radius: 5px;
                padding: 8px 12px;
                font-size: 14px;
                cursor: pointer;
                position: absolute;
                top: 10px;
                right: 10px;
                transition: background-color 0.3s ease;
            }

            .project-item button:hover {
                background-color: #e63946;
            }

            hr {
                border: none;
                border-top: 1px solid #eeeeee;
                margin: 15px 0;
            }
                
        }
</style>

    </style>
</head>
<body>
    <div class="container">
        <h1>Your Projects</h1>
        <form action="" method="POST" class="form">
            <input type="hidden" name="username" value="<?php echo $user_id; ?>">
            <input type="text" name="project_title" placeholder="Project Title" required>
            <input type="date" name="date_completed" required>
            <input type="text" name="college_name" placeholder="College Name" required>
            <textarea name="problem_faced" placeholder="Problem Faced" required></textarea>
            <textarea name="solution" placeholder="Solution" required></textarea>
            <button type="submit" name="add">Add Project</button>
        </form>
        <div class="projects-list">
            <?php
            // Add project
            if (isset($_POST['add'])) {
                $project_title = $conn->real_escape_string($_POST['project_title']);
                $date_completed = $_POST['date_completed'];
                $college_name = $conn->real_escape_string($_POST['college_name']);
                $problem_faced = $conn->real_escape_string($_POST['problem_faced']);
                $solution = $conn->real_escape_string($_POST['solution']);

                $sql = "INSERT INTO projects (user_id, project_title, date_completed, college_name, problem_faced, solution) 
                        VALUES ('$user_id', '$project_title', '$date_completed', '$college_name', '$problem_faced', '$solution')";

                if ($conn->query($sql) === TRUE) {
                    echo "New project added successfully.<br>";
                } else {
                    echo "Error: " . $conn->error;
                }
            }

            // Display user projects
            $sql = "SELECT * FROM projects WHERE user_id='$user_id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<h3>" . htmlspecialchars($row['project_title']) . "</h3>";
                    echo "<p><strong>Date Completed:</strong> " . htmlspecialchars($row['date_completed']) . "</p>";
                    echo "<p><strong>College Name:</strong> " . htmlspecialchars($row['college_name']) . "</p>";
                    echo "<p><strong>Problem Faced:</strong> " . htmlspecialchars($row['problem_faced']) . "</p>";
                    echo "<p><strong>Solution:</strong> " . htmlspecialchars($row['solution']) . "</p>";
                    echo "<form method='POST' action=''>";
                    echo "<input type='hidden' name='project_id' value='" . $row['id'] . "'>";
                    echo "<button type='submit' name='remove'>Remove</button>";
                    echo "</form><hr>";
                }
            } else {
                echo "No projects found. Add a new project above.";
            }

            // Remove project
            if (isset($_POST['remove'])) {
                $project_id = $_POST['project_id'];

                $sql = "DELETE FROM projects WHERE id='$project_id' AND user_id='$user_id'";

                if ($conn->query($sql) === TRUE) {
                    echo "Project removed successfully.<br>";
                } else {
                    echo "Error: " . $conn->error;
                }
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
