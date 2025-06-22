<?php
ob_start(); // Start output buffering

include 'C:\xampp\htdocs\Tech_Mitra\db\db.php';
session_start(); // Start the session

$action = $_GET['action'] ?? '';
header('Content-Type: text/html'); // Set the content type to HTML
include 'C:\xampp\htdocs\Tech_Mitra\includes\sidebar.php';

// Log the action and full URL for debugging purposes
echo '<!-- Action: ' . htmlspecialchars($action) . ' -->';
echo '<!-- Full URL: ' . htmlspecialchars($_SERVER['REQUEST_URI']) . ' -->';

// Check if the user is an admin
function isAdmin() {
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

try {
    switch ($action) {
        case 'fetch':
            $result = $conn->query("SELECT * FROM problems");
            if (!$result) {
                throw new Exception($conn->error);
            }
            echo '<table border="1"><tr><th>ID</th><th>Problem</th><th>Solution</th></tr>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr><td>' . htmlspecialchars($row['id']) . '</td><td>' . htmlspecialchars($row['problem']) . '</td><td>' . htmlspecialchars($row['solution']) . '</td></tr>';
            }
            echo '</table>';
            break;

        case 'add':
            if (!isAdmin()) {
                echo 'Access denied';
                exit;
            }
            if (!empty($_POST['problem']) && !empty($_POST['solution'])) {
                $problem = $conn->real_escape_string($_POST['problem']);
                $solution = $conn->real_escape_string($_POST['solution']);
                $stmt = $conn->prepare("INSERT INTO problems (problem, solution) VALUES (?, ?)");
                if (!$stmt) {
                    throw new Exception($conn->error);
                }
                $stmt->bind_param("ss", $problem, $solution);
                $stmt->execute();
                echo 'Problem added successfully with ID: ' . htmlspecialchars($conn->insert_id);
            } else {
                echo 'Invalid input';
            }
            break;

        case 'remove':
            if (!isAdmin()) {
                echo 'Access denied';
                exit;
            }
            if (!empty($_POST['id'])) {
                $id = intval($_POST['id']);
                $stmt = $conn->prepare("DELETE FROM problems WHERE id = ?");
                if (!$stmt) {
                    throw new Exception($conn->error);
                }
                $stmt->bind_param("i", $id);
                $stmt->execute();
                echo 'Problem removed successfully';
            } else {
                echo 'ID is required';
            }
            break;

        case 'edit':
            if (!isAdmin()) {
                echo 'Access denied';
                exit;
            }
            if (!empty($_POST['id']) && !empty($_POST['problem']) && !empty($_POST['solution'])) {
                $id = intval($_POST['id']);
                $problem = $conn->real_escape_string($_POST['problem']);
                $solution = $conn->real_escape_string($_POST['solution']);
                $stmt = $conn->prepare("UPDATE problems SET problem = ?, solution = ? WHERE id = ?");
                if (!$stmt) {
                    throw new Exception($conn->error);
                }
                $stmt->bind_param("ssi", $problem, $solution, $id);
                $stmt->execute();
                echo 'Problem updated successfully';
            } else {
                echo 'Invalid input';
            }
            break;

        default:
            echo 'Invalid action';
            break;
    }
} catch (Exception $e) {
    echo 'Error: ' . htmlspecialchars($e->getMessage());
}

ob_end_flush(); // Flush the output buffer and send output
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Real World Problems</title>
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                background: linear-gradient(120deg, #f0f8ff, #4a90e2);
                color: #333;
            }
            .Container{
                margin-left:250px;
                margin-top:80px;
            }
            h1 {
                text-align: center;
                margin: 20px;
                color: #fff;
                font-size: 2.5rem;
                text-shadow: 2px 2px 5px #333;
            }
            p {
                text-align: center;
                font-size: 1.2rem;
                color: #fefefe;
                margin-bottom: 20px;
            }
            .controls {
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
            }
            .controls input {
                margin-right: 10px;
                padding: 10px;
                width: 300px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            .controls button {
                padding: 10px 20px;
                background-color: #4a90e2;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .controls button:hover {
                background-color: #3a7bd5;
            }
            table {
                width: 80%;
                margin: 0 auto;
                border-collapse: collapse;
                background-color: white;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            th, td {
                border: 1px solid #ddd;
                padding: 12px;
                text-align: center;
            }
            th {
                background-color: #4a90e2;
                color: white;
                font-weight: bold;
            }
            td button {
                padding: 5px 10px;
                background-color: #ff4d4d;
                color: white;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }
            td button.edit {
                background-color: #4CAF50;
            }
            td button:hover {
                opacity: 0.8;
            }
            @media (max-width:768px){
                body {
                    font-family: 'Poppins', sans-serif;
                    margin: 0;
                    padding: 0;
                    background: linear-gradient(120deg, #f0f8ff, #4a90e2);
                    color: #333;
                }
                .Container{
                    margin-left:50px;
                    margin-top:80px;
                }
                h1 {
                    text-align: center;
                    margin: 20px;
                    color: #fff;
                    font-size: 2.5rem;
                    text-shadow: 2px 2px 5px #333;
                }
                p {
                    text-align: center;
                    font-size: 1.1rem;
                    color: #fefefe;
                    margin-bottom: 20px;
                }
                .controls {
                    display: flex;
                    justify-content: center;
                }
                .controls input {
                    margin-right: 10px;
                    padding: 10px;
                    width: 300px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    margin-top:10px;
                }
                .controls button {
                    padding: 10px 20px;
                    background-color: #4a90e2;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                .controls button:hover {
                    background-color: #3a7bd5;
                }
                table {
                    width:40px;
                    margin: 0 auto;
                    border-collapse: collapse;
                    background-color: white;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }
                th, td {
                    border: 1px solid #ddd;
                    padding: 12px;
                    text-align: center;
                }
                th {
                    background-color: #4a90e2;
                    color: white;
                    font-weight: bold;
                }
                td button {
                    padding: 5px 10px;
                    background-color: #ff4d4d;
                    color: white;
                    border: none;
                    border-radius: 3px;
                    cursor: pointer;
                }
                td button.edit {
                    background-color: #4CAF50;
                }
                td button:hover {
                    opacity: 0.8;
                }

            }
                
        </style>
    </head>
    <body>
        <div class="Container">
            <h1>Real World Problems</h1>
            <p>Make a Solution, Make an Impact!</p>
            <div class="controls" id="adminControls">
                <input type="text" id="problem" placeholder="Problem" required>
                <input type="text" id="solution" placeholder="Expected Solution" required>
                <button onclick="addProblem()">Add Problem</button>
            </div>
            <table id="todoTable">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Problem</th>
                        <th>Expected Solution</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <script>
                const isAdmin = <?= json_encode(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'); ?>;
                
                document.addEventListener('DOMContentLoaded', () => {
                    if (!isAdmin) {
                        fetchData();
                    }
                    fetchData();
                });

                async function fetchData() {
                    const response = await fetch('?action=fetch');
                    const data = await response.json();
                    if (data.status === 'success') {
                        const tableBody = document.querySelector('#todoTable tbody');
                        tableBody.innerHTML = '';
                        data.data.forEach((row, index) => {
                            const tr = document.createElement('tr');
                            tr.innerHTML = `
                                <td>${index + 1}</td>
                                <td>${row.problem}</td>
                                <td>${row.solution}</td>
                                <td>
                                    ${isAdmin ? `
                                        <button class="edit" onclick="editProblem(${row.id})">Edit</button>
                                        <button onclick="removeProblem(${row.id})">Remove</button>
                                    ` : ''}
                                </td>
                            `;
                            tableBody.appendChild(tr);
                        });
                    } else {
                        alert(data.message);
                    }
                }

                async function addProblem() {
                    const problem = document.getElementById('problem').value;
                    const solution = document.getElementById('solution').value;

                    if (problem && solution) {
                        const formData = new FormData();
                        formData.append('problem', problem);
                        formData.append('solution', solution);

                        const response = await fetch('?action=add', { method: 'POST', body: formData });
                        const data = await response.json();
                        if (data.status === 'success') {
                            fetchData();
                            document.getElementById('problem').value = '';
                            document.getElementById('solution').value = '';
                        } else {
                            alert(data.message);
                        }
                    } else {
                        alert('Please fill in both fields.');
                    }
                }

                async function removeProblem(id) {
                    const formData = new FormData();
                    formData.append('id', id);

                    const response = await fetch('?action=remove', { method: 'POST', body: formData });
                    const data = await response.json();
                    if (data.status === 'success') {
                        fetchData();
                    } else {
                        alert(data.message);
                    }
                }

                async function editProblem(id) {
                    const newProblem = prompt('Edit Problem:');
                    const newSolution = prompt('Edit Solution:');
                    if (newProblem !== null && newSolution !== null) {
                        const formData = new FormData();
                        formData.append('id', id);
                        formData.append('problem', newProblem);
                        formData.append('solution', newSolution);

                        const response = await fetch('?action=edit', { method: 'POST', body: formData });
                        const data = await response.json();
                        if (data.status === 'success') {
                            fetchData();
                        } else {
                            alert(data.message);
                        }
                    }
                }
            </script>
        </div>    
    </body>
</html>