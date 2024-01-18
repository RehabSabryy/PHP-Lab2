<?php

// 1- Search for how to make \n work in browser.
    $php = "PHP \nCourse";
    echo nl2br($php);

// 2-Display $_SERVER in a readable format.
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

// 3-Write a PHP script to get the sum and average of an indexed array.
$numbers = array(12, 45 , 10 , 25);

            // get sum of array
            echo "Sum=". array_sum($numbers);
            echo "<br>";

            // get average of array
            echo "Average=" . array_sum($numbers) / count($numbers);
            echo "<br>";

            // Sort array from highest to lowest.
            rsort($numbers);
            echo $numbers[0] , " " , $numbers[1] , " " , $numbers[2] , " " , $numbers[3];
            echo "<br>";

// 4-Write a PHP script to sort the following associative array:
    $names = array("Sara"=>31 , "John"=>41 , "Walaa"=>39 , "Ramy"=>40); 
    // ascending order by value
    asort($names);
        echo "Sort array in ascending order by value:" ."<br>";

    foreach($names as $x=>$x_value)
    {
        echo "Value=" . $x_value;
        echo "<br>";
    }

    // ascending order by key 
    ksort($names);
    echo "Sort array in ascending order by value:" ."<br>";
    foreach($names as $x=>$x_value)
    {
        echo "Key=" . $x;
        echo "<br>";
    }

    // descending order by value
    arsort($names);
    echo "Sort array in descending order by value:" ."<br>";
    foreach($names as $x=>$x_value) 
    {
        echo "Value=" . $x_value;
        echo "<br>";
    }

    // descending order by key  
    krsort($names);
    echo "Sort array in descending order by value:" ."<br>";
    foreach($names as $x=>$x_value)
    {
        echo "Key=" . $x;
        echo "<br>";
    }

?>