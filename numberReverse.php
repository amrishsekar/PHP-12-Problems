<?php

// Declaring a "readline" for the input:- 
$number = readline("Enter the number: ");

// Reversing the 
$numberReverse = (int)strrev($number);

if ($number > 9) {
    echo "The reversed number of $number is $numberReverse"."\n";
}
else {
    echo "$number is a single digit number, It can't be reversed"."\n";
}

//-----x-----x-----x-----

?>