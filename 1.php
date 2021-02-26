<?php

$numArray = [100,29,34,42,53]; // Array of random numbers

$max = $numArray[0];   // set variable for max number
$min = $numArray[0];  // set variable for min number

for($i = 0; $i < count($numArray) ; $i++){ // create loop for $numArray (Array)
    
    if($max < $numArray[$i]){ // find the max number 
        $max = $numArray[$i];   
    }

    if($min > $numArray[$i]){ // find the min number 
        $min = $numArray[$i];   
    }
}
echo "Max number = $max";  // print the max number
echo '<br>';
echo "Min number = $min"; // print the min number