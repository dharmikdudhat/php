<?php

require_once "dbh.inc.php";

if (isset($_GET["id"])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM user_2 WHERE ID = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo 'user not found';
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="container card mt-5">
                <h2 class="text-center card-header">Update User</h2>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="updateuser.php" class="mt-4">
                        <input type="hidden" name="id" value="<?php echo $user['ID']; ?>">

                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="<?php echo $user['FIRST_NAME']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="<?php echo $user['LAST_NAME']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="<?php echo $user['EMAIL']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary:</label>
                            <input type="text" class="form-control" id="salary" name="salary"
                                value="<?php echo $user['SALARY']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image <span>(Required, please upload your
                                    image)</span></label>
                            <input type="file" class="form-control" id="image" accept=".jpg, .png" name="image">
                            <?php if (!empty($user['IMAGE'])): ?>
                                <p>Current Image: <strong><?php echo $user['IMAGE']; ?></strong></p>
                                <img src="img/<?php echo $user['IMAGE']; ?>" alt="User Image" style="width: 100px;">
                            <?php endif; ?>

                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>