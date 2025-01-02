<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //strings are used to save  name and like that stuff

    $name = "dharmik";
    $introduction = "hello $name";
    echo $name;
    echo $introduction;
    //to measure length of the string use strlen function
    echo strlen($introduction);
    //to cut a part of a string and return it as a new string substr function is used
    echo substr($introduction, strlen($introduction) - 3);
    //to split a string with a list of fruits separated by a comma, we use the explode function:
    $fruites = "apple,banana,orange";
    $fruite_list = explode(",", $fruites);
    print_r($fruite_list);
    //To join back an array to a single string separated with commas, we use the implode function:
    $fruits = implode(",", $fruite_list);
    echo $fruits;
    ?>
</body>
</html>