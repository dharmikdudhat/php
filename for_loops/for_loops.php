<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   //for loops
   $odd_numbers = [1,3,5,7,9,11,13,15,17,19];
   for($i = 0; $i < count($odd_numbers);$i++){
    $odd_number = $odd_numbers[$i];
    echo $odd_number . "\n";
   }

   //foreach loops
   //The foreach loop iterates over an iterable element such as an array or an object, providing the members in a specific variable one at a time.
   $fruits = ["apple","mango", "orange","banana"];
   foreach ($fruits as $fruit) {
    echo $fruit . "\n";
   }

   //when iterating over arrays with keys we can use the following syntax
   $fruits = ["apple" => "red", "mango" => "yellow","orange" => "orange","banana" => "yellow"];
   foreach ($fruits as $key => $value) {
    echo "$key's colour is $value." . "\n";
   }
   ?> 
</body>
</html>