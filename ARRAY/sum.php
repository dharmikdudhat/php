<!-- Question: Given an array of integers, calculate the sum of all its elements.
Example Array: [1, 2, 3, 4, 5]
Expected Output: 15 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $numbers = [1,2,3,4,5];
     $sum = array_sum($numbers);
     echo "$sum";
    ?>
</body>
</html>