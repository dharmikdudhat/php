<?php
require_once("dbh.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $firstname = $_POST["firstname1"];
    $lastname = $_POST["lastname1"];
    $email = $_POST["email1"];
    $salary = $_POST["salary1"];

    // echo json_encode(['success' => true, 'message' => $id, $firstname, $lastname, $email, $salary]);
    // exit();
    
    $newImageName = null;

    // Handle image upload if present
    if (isset($_FILES["image1"]) && $_FILES["image1"]["error"] === 0) {
        $fileName = $_FILES["image1"]["name"];
        $fileSize = $_FILES["image1"]["size"];
        $tmpName = $_FILES["image1"]["tmp_name"];

        $validImageExtension = ['jpg', 'png'];
        $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo json_encode(['success' => false, 'message' => 'Invalid image extension']);
            exit();
        } elseif ($fileSize > 1000000) {
            echo json_encode(['success' => false, 'message' => 'File size is too large']);
            exit();
        } else {
            // Check and remove the old image
            $query = "SELECT IMAGE FROM user_2 WHERE ID = :id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $oldImage = $stmt->fetchColumn();

            if ($oldImage && file_exists('img/' . $oldImage)) {
                unlink('img/' . $oldImage);
            }

            // Save the new image
            $newImageName = uniqid() . '.' . $imageExtension;
            move_uploaded_file($tmpName, 'img/' . $newImageName);
        }
    }

    // Construct the SQL query
    $query = "UPDATE user_2 SET FIRST_NAME = :firstname, LAST_NAME = :lastname, EMAIL = :email, SALARY = :salary";
    
    if ($newImageName) {
        $query .= ", IMAGE = :newimagename";
    }

    $query .= " WHERE ID = :id";

    // Prepare the statement
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':firstname', $firstname);  // Use correct param name
    $stmt->bindParam(':lastname', $lastname);    // Use correct param name
    $stmt->bindParam(':email', $email);          // Use correct param name
    $stmt->bindParam(':salary', $salary);        // Use correct param name

    if ($newImageName) {
        $stmt->bindParam(':newimagename', $newImageName);
    }

    $stmt->bindParam(':id', $id);                // Bind the user ID

    // Execute the query
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'User updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error updating user']);
    }

    $pdo = null; // Close the connection
    exit();
} else {
    header("Location: userstable.php");
}
?>
