<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
            <?php

            //simple arrays 
                //$names = array("dharmik", "dharmin", "dhar");

                //finding numbers of names from array
                // $fisrt_name = $names[0];
                // $second_name = $names[1];
                // $third_name = $names[2];

                //array of odd numbers 
                // $odd_numbers = [1,3,5,7];
                // $odd_numbers[] = 9;
                // $odd_numbers[] = 11;
                // print_r($odd_numbers);

                //to remove items from an array use unset function
                // unset($odd_numbers[0]);
                // print_r($odd_numbers);
                //array does not run in echo only reuns in print_r
                //echo "$odd_numbers";

                //other useful functions of array
                //count function used to count number of elements in array
                //echo count($odd_numbers);//output = 4

                //reset function used to reset first element of array it will remove it
                // $odd_numbers = [1,3,5,7,9];
                // $first_item = reset($odd_numbers);
                // echo $first_item;//output = 1

                //end function gets the last element of the array 
                // $odd_numbers = [1,3,5,7,9];
                // $last_item = end($odd_numbers);
                // echo $last_item;//output = 9

                //stack and queue functions in array
                
                //push function adds element at the last pf the array
                //  $numbers = [1,2,3,4];
                // array_push($numbers, 5);
                // print_r($numbers); //output = 1,2,3,4,5
                
                //pop function removes element from last of the array
                // array_pop($numbers);
                // print_r($numbers); // output = 1,2,3
                
                //array_unshift function is used to add element at the beginning of the array
                // array_unshift($numbers, 0);
                // print_r($numbers);
                
                //array_shift function is used to remove element from the beginning of the array
                // array_shift($numbers);
                // print_r($numbers);
                
                //array_merge is used to concatenate two arrays
                // $numbers1 = [1,2,3,4];
                // $numbers2 = [5,6,7,8];
                // $numbers = array_merge($numbers1, $numbers2);
                // print_r($numbers);

                //sort function is used to sort the array
                // $array = [1,4,3,6,8,9];
                // sort($array);
                // print_r($array);


                //rsort function is used to reversely sort the array
                // rsort($array);
                // print_r($array);

                //array_slice function is used to get the specific part of the array
                // $numbers = [1,3,5,7,9,11,13,15];
                // print_r(array_slice($numbers, 3));    
                // print_r(array_slice($numbers, 3 , 2));//if we want specific number of output           
                // print_r($numbers);

                //arrays with key value
                $numbers = [
                    "dharmik" => "9727805788",
                    "karan" => "1234567890",
                    "dharmik1" => "1234567890",
                ];

                print_r($numbers);
                print_r($numbers["dharmik"]);
                print_r($numbers["dharmik1"]);
                print_r($numbers["karan"]);

                $numbers["newone"] = "234567890";
                print_r($numbers);

                //array_keys function gives keys of the array
                $keys = array_keys($numbers);
                print_r($keys);

                //arrays_values function is used to get only values of the array
                print_r(array_values($numbers));
            
            ?>
    </body>
</html>