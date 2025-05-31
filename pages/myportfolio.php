<?php
include 'C:\xampp\htdocs\Tech_Mitra\includes\session.php';
include 'C:\xampp\htdocs\Tech_Mitra\db\db.php';
include 'C:\xampp\htdocs\Tech_Mitra\includes\sidebar.php';

$conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Function to fetch portfolio data
function fetchPortfolio($conn, $username) {
    $stmt = $conn->prepare("
        SELECT users.id AS user_id, users.username, portfolios.* 
        FROM users 
        LEFT JOIN portfolios ON users.id = portfolios.user_id 
        WHERE users.username = ?
    ");
    $stmt->execute([$username]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Check if user is logged in or username is provided in the URL
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} elseif (isset($_GET['username'])) {
    $username = htmlspecialchars($_GET['username']);
} else {
    die("Access denied. Please log in or specify a username.");
}

// Fetch user and portfolio data
$data = fetchPortfolio($conn, $username);

if (!$data) {
    die("User or portfolio not found.");
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bio = htmlspecialchars($_POST['bio']);
    $skills = htmlspecialchars($_POST['skills']);
    $projects = htmlspecialchars($_POST['projects']);
    $contactInfo = htmlspecialchars($_POST['contact_info']);

    if ($data['id']) {
        // Update existing portfolio
        $stmt = $conn->prepare("UPDATE portfolios SET bio = ?, skills = ?, projects = ?, contact_info = ? WHERE id = ?");
        $stmt->execute([$bio, $skills, $projects, $contactInfo, $data['id']]);
    } else {
        // Create new portfolio
        $stmt = $conn->prepare("INSERT INTO portfolios (user_id, bio, skills, projects, contact_info) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$data['user_id'], $bio, $skills, $projects, $contactInfo]);
    }

    // Refresh the data
    header("Location: portfolio.php?username=$username");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['username']); ?>'s Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px; 
            background: linear-gradient(120deg, #f9f9f9, #e0e7ff);
        }
        .container { 
            max-width: 800px; 
            margin: 0 auto; 
            background: #fff; 
            padding: 20px; 
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
            margin-top:50px;
        }
        h1 {
            color: #333;
        }
        .form-group {
            margin-bottom: 20px; 
        }
        label { 
            font-weight: bold; 
            display: block; 
            margin-bottom: 8px; 
        }
        textarea, input[type="text"] { 
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            font-size: 16px; 
        }
        textarea {
            height: 100px; 
            resize: vertical; 
        }
        button { 
            background-color: #007bff; 
            color: #fff; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            font-size: 16px; 
        }
        button:hover { 
            background-color: #0056b3; 
        }
        @media (max-width:768px) {
            body {
                font-family: Arial, sans-serif;
                padding: 20px; 
                background: linear-gradient(120deg, #f9f9f9, #e0e7ff);
            }
            .container { 
                width:220px;  
                background: #fff; 
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                margin-left:60px; 
                margin-top:50px;
            }
            h1 {
                color: #333;
            }
            .form-group {
                margin-bottom: 20px;
                padding:10px; 
            }
            label { 
                font-weight: bold; 
                display: block; 
                margin-bottom: 8px; 
            }
            textarea, input[type="text"] { 
                width: 100%; 
                padding: 10px; 
                border: 1px solid #ccc; 
                border-radius: 4px; 
                font-size: 16px; 
            }
            textarea {
                height: 100px; 
                resize: vertical; 
            }
            button { 
                background-color: #007bff; 
                color: #fff; 
                padding: 10px 20px; 
                border: none; 
                border-radius: 4px; 
                cursor: pointer; 
                font-size: 16px; 
            }
            button:hover { 
                background-color: #0056b3; 
            }
                
        }
    </style>
</head>
<body>
<div class="container">
    <h1><?php echo htmlspecialchars($data['username']); ?>'s Portfolio</h1><p>{Add Yours Detail's And Save }</p>
    <form method="POST" action="">
        <!-- Bio -->
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio"><?php echo htmlspecialchars($data['bio'] ?? ''); ?></textarea>
        </div>

        <!-- Skills -->
        <div class="form-group">
            <label for="skills">Skills (comma-separated):</label>
            <input type="text" id="skills" name="skills" value="<?php echo htmlspecialchars($data['skills'] ?? ''); ?>">
        </div>

        <!-- Projects -->
        <div class="form-group">
            <label for="projects">Projects (list each project on a new line):</label>
            <textarea id="projects" name="projects"><?php echo htmlspecialchars($data['projects'] ?? ''); ?></textarea>
        </div>

        <!-- Contact Info -->
        <div class="form-group">
            <label for="contact_info">Contact Information:</label>
            <input type="text" id="contact_info" name="contact_info" value="<?php echo htmlspecialchars($data['contact_info'] ?? ''); ?>">
        </div>

        <button type="submit">Save Changes</button>
    </form>
</div>
</body>
</html>
