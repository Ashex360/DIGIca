<?php
include 'C:\xampp\htdocs\Tech_Mitra\includes\session.php';
include 'C:\xampp\htdocs\Tech_Mitra\db\db.php';
include 'C:\xampp\htdocs\Tech_Mitra\includes\sidebar.php';

// Database connection

$conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Assume the logged-in user ID (replace with session-based login system)
$userId = 2; // Example logged-in user ID

// Fetch user data from the database
$stmt = $conn->prepare("SELECT username, career_goal, timetable FROM users WHERE id = ?");
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Default timetable if not set
$defaultTimetable = [
    "5:00 AM - 6:00 AM" => "Morning Exercise",
    "6:00 AM - 7:00 AM" => "Study Engineering Mathematics",
    "7:00 AM - 8:00 AM" => "Breakfast and Relax",
    "8:00 AM - 12:00 PM" => "College Lectures",
    "12:00 PM - 1:00 PM" => "Lunch Break",
    "1:00 PM - 4:00 PM" => "More Lectures/Practice",
    "4:00 PM - 5:00 PM" => "Travel Back Home",
    "6:00 PM - 7:00 PM" => "Work on Projects",
    "8:00 PM - 9:00 PM" => "Dinner & Relax",
    "9:00 PM - 11:00 PM" => "Coding Practice",
    "11:00 PM - 12:00 AM" => "Reading Books",
];

// Decode timetable from database or use default
$timetable = $user['timetable'] ? json_decode($user['timetable'], true) : $defaultTimetable;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $careerGoal = htmlspecialchars($_POST['career_goal']);
    $updatedTimetable = $_POST['timetable'];

    // Update user data in the database
    $stmt = $conn->prepare("UPDATE users SET career_goal = ?, timetable = ? WHERE id = ?");
    $stmt->execute([
        $careerGoal,
        json_encode($updatedTimetable),
        $userId
    ]);

    // Refresh data after update
    $user['career_goal'] = $careerGoal;
    $timetable = $updatedTimetable;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #f9f9f9, #e0e7ff);
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
            margin-top:50px;
        }
        h1, h2 {
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
        input[type="text"], textarea {
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left; 
        }
        table th {
            background-color: #f4f4f4;
        }
        button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px; 
        }
        button:hover {
            background-color: #218838; 
        }
        @media (max-width:768px){
            body {
                font-family: Arial, sans-serif;
                background: linear-gradient(120deg, #f9f9f9, #e0e7ff);
                padding: 20px;
            }
            .container {
                width:auto;
                margin-left:60px;
                margin: 0 auto;
                background: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
                margin-top:50px;
            }
            h1, h2 {
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
            input[type="text"], textarea {
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
            table {
                width:200px;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            table th, table td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: left; 
            }
            table th {
                background-color: #f4f4f4;
            }
            button {
                background-color: #28a745;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px; 
            }
            button:hover {
                background-color: #218838; 
            }       
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Profile Page</h1><p>{Change According As You Need and Save}</p>
    <form method="POST" action="">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" value="<?php echo htmlspecialchars($user['username']); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="career_goal">Career Goal:</label>
            <textarea id="career_goal" name="career_goal" required><?php echo htmlspecialchars($user['career_goal']); ?></textarea>
        </div>
        <h2>Daily Timetable</h2>
        <table>
            <thead>
            <tr>
                <th>Time Slot</th>
                <th>Activity</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($timetable as $time => $activity): ?>
                <tr>
                    <td><?php echo $time; ?></td>
                    <td>
                        <input type="text" name="timetable[<?php echo $time; ?>]" value="<?php echo htmlspecialchars($activity); ?>">
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <button type="submit">Save Changes</button>
    </form>
</div>
</body>
</html>
