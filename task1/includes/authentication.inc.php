<?php
session_start();
require 'dbh.inc.php';

// Set content type to JSON for AJAX response
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        $query = "SELECT ID,FIRST_NAME,LAST_NAME,PASSWORD,EMAIL FROM user_2 WHERE EMAIL = :email";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['PASSWORD'])) {
                $_SESSION['user_id'] = $user['ID'];
                $_SESSION['firstname'] = $user['FIRST_NAME'];
                $_SESSION['lastname'] = $user['LAST_NAME'];
                $_SESSION['email'] = $user['EMAIL'];

                $_SESSION['message'] = "Login successful! Welcome, " . htmlspecialchars($_SESSION['firstname']) . " " . htmlspecialchars($_SESSION['lastname']) . ".";
                

                // Return success message as JSON
                echo json_encode([
                    'success' => true,
                    'message' => "Login successful! Welcome, " . htmlspecialchars($_SESSION['firstname']) . " " . htmlspecialchars($_SESSION['lastname']) . "."
                ]);
                exit;
            } else {
                // Return invalid password message
                echo json_encode([
                    'success' => false,
                    'message' => "Invalid password."
                ]);
                exit;
            }
        } else {
            // Return invalid username or password message
            echo json_encode([
                'success' => false,
                'message' => "Invalid username or password."
            ]);
            exit;
        }
    } else {
        // Return message for empty fields
        echo json_encode([
            'success' => false,
            'message' => "Please fill in all the fields."
        ]);
        exit;
    }
} else {
    // If not a POST request, return error
    echo json_encode([
        'success' => false,
        'message' => "Invalid request method."
    ]);
}
?>
