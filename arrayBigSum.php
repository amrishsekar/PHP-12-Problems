<?php

// Declare the array of numbers:-
$arrayOfNumbers = [1001, 1002, 1003, 1004, 1005738837];

// Declare an empty variable:-
$sum = 0;

// loop the array:-
for ($i = 0; $i < count($arrayOfNumbers); $i++) {
    // adding the index of numbers one by one:- 
    $sum = $sum + $arrayOfNumbers[$i];
}

// Printing the answer:-
echo "The sum is: ".$sum."\n";

//-----x-----x-----x-----

?>