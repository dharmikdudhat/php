<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Functions are simple code blocks we can call from anywhere.
    //There are two types of functions - library functions and user functions. Library functions, such as array_push are part of the PHP library and can be used by anyone. However, you may write your own functions and use them across your code.
    function sum($numebr){
        $sum = 0;
        foreach($numebr as $number){
            $sum += $number;
        }

        return $sum;
    }
    ?>
</body>
</html>