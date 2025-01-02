<!-- Question: Given an array of integers, sort the array in ascending order.
Example Array: [5, 3, 8, 1, 2]
Expected Output: [1, 2, 3, 5, 8] -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $numbers = [5, 3, 8, 1, 2];
    sort($numbers);
    print_r($numbers);
?>
</body>
</html>