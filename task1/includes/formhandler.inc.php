<?php
require_once("dbh.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an array to store responses
    $response = [
        'success' => 'false',
        'message' => ''
    ];

    // Validate input fields
    if (empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["salary"]) || empty($_POST["password"])) {
        $response['message'] = 'All fields are required.';
        echo json_encode($response);
        exit();
    }

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $salary = $_POST["salary"];
    $password = $_POST["password"];

    // Hash the password using bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); 

    // Check if an image was uploaded
    if ($_FILES["image"]["error"] === 4) {
        $response['message'] = 'Image does not exist.';
        echo json_encode($response);
        exit();
    } 

    // Process the image upload
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'png'];
    $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!in_array($imageExtension, $validImageExtension)) {
        $response['message'] = 'Invalid image extension. Allowed extensions are: jpg, png.';
        echo json_encode($response);
        exit();
    } else if ($fileSize > 1000000) {
        $response['message'] = 'File size is too large. Maximum size allowed is 1 MB.';
        echo json_encode($response);
        exit();
    } else {
        // Create a unique file name for the image
        $newImageName = uniqid() . '.' . $imageExtension;

        // Move the uploaded file to the 'img' directory
        if (!move_uploaded_file($tmpName, 'img/' . $newImageName)) {
            $response['message'] = 'Failed to move the uploaded file.';
            echo json_encode($response);
            exit();
        }

        // Insert the user data into the database
        $query = "INSERT INTO user_2 (FIRST_NAME, LAST_NAME, EMAIL, SALARY, PASSWORD, IMAGE) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = $pdo->prepare($query);

        // Execute the query
        if ($stmt->execute([$firstname, $lastname, $email, $salary, $hashedPassword, $newImageName])) {
            $response['success'] = 'true';
            $response['message'] = 'Registration successful.';
        } else {
            $response['message'] = 'Database insertion failed. Please try again.';
        }

        // Return the response in JSON format
        echo json_encode($response);
        exit();
    }
} else {
    // Handle the case when the request method is not POST
    $response = [
        'success' => 'false',
        'message' => 'Invalid request method. Only POST is allowed.'
    ];
    echo json_encode($response);
    exit();
}

