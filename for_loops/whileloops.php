<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //While loops are simple blocks that execute repeatedly until the while loop condition is not met.
    // $i = 0;
    // while($i < 99){
    //     echo $i . "\n";
    //     $i+=1;
    // }

    //continue statement let the loop uterate until the condition is true
    // $i = 0;
    // while($i < 99){
    //     $i+=1;
    //     if($i % 2 == 0){
    //         echo "skipping number $i as it is even " . "\n";
    //         continue;
    //     }

    //     echo "counter is on number $i";    
    // }

    //break statement imediately breaks the loop
    $i = 0;
    while($i < 99){
        $i+=1;
        if($i > 50){
            echo "leaving the loop";
            break;
        }
        if($i % 2 == 0){
            echo "skipping number $i as it is even " . "\n";
            continue;
        }

        echo "counter is on number $i";    
    }
    ?>
</body>
</html>