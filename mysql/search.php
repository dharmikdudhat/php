<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE user_name = :usersearch";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        echo "<tr><td colspan='3' class='text-center'>Error: " . $e->getMessage() . "</td></tr>";
    }
} else {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    <h3>
        Search Results:
    </h3>

    <?php

    if(empty($results)){
        echo "<div>";
        echo "<p> There were no results </p>";
        echo "</div>";
    } else {
        foreach ($results as $result) {
            echo "<div>";
            echo "<h4>" . htmlspecialchars($result["user_name"]) . "</h4>";
            echo "<p>" . htmlspecialchars($result["comment_text"]) . "</p>";
            echo "<p>" . htmlspecialchars($result["created_at"]) . "</p>";
            echo "</div>";
        }
        //var_dump($results);
        // echo "<div>";
        // echo "<p> There were no results </p>";
        // echo "</p>";
    }
    ?>
    </section>
</body>
</html>
