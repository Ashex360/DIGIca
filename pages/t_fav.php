<?php
include 'C:\xampp\htdocs\Tech_Mitra\db\db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? 0;

    // Toggle the favorite status
    $query = "UPDATE platforms SET is_favorite = NOT is_favorite WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
