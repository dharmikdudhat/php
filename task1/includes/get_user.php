<?php

require_once "dbh.inc.php";

if (isset($_GET["id"])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM user_2 WHERE ID = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo json_encode($user);
    } else {
        echo json_encode(['error' => 'User not found']);
    }
}