<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h3>Signup</h3>

    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Signup</button>
    </form>
    
    <h3>Change Account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Update</button>
    </form>

    <h3>Delete Account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Delete</button>
    </form> -->

    <h3>Search User</h3>

    <form class="searchform"action="search.php" method="post">
        <label for="search">Search for User : </label>
        <input type="text" id="serach" name="usersearch" placeholder="search....">
        <button>Search</button>
    </form>
    <?php 
        //datatypes we can use in mysql
        //INT(11) -2147483648 - 2147483647
        //SIGNED MEANS WE CAN STORE NEGATIVE NUMBETS IN IT
        //WHILE UNSIGNED MEANS WE CAN ONLY STORE POSITIVE INTEGERS IN IT
        //BIGINT 948376983476476430

        //FLOAT -23452.43543
        //DOUBLE

        //VARCHAR(30) "DHARMIK DUDHAT"
        //TEXT - FOR LONG TEXT WORDS OR PARAGRAPHS

        //DATE 2014-05-14
        //DATETIME 2023-05-14 11:30:00

        //connect mysql to php

    ?>
</body>
</html>