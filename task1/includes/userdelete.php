<?php
require_once("dbh.inc.php"); // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $userId = $_POST['id'];

    // Prepare SQL statement to delete the user
    $stmt = $pdo->prepare("DELETE FROM user_2 WHERE ID = ?");
    if ($stmt->execute([$userId])) {
        // If deletion is successful, return a success message
        echo json_encode(['success' => true]);
    } else {
        // If deletion fails, return an error message
        echo json_encode(['success' => false, 'message' => 'Failed to delete the user.']);
    }
} else {
    // If the request is invalid, return an error message
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
}
?>
