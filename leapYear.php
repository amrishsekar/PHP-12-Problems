<?php

// Declaring "readline" for the input:-
$year = readline("Enter the year: ");

// Writing conditions to check leap year or not:-
if (strlen($year) === 4) {
    if ($year % 4 == 0) {
        echo "$year is the leap year \n";
    } 
    else {
        echo "$year is not the leap year \n";
    }
}
else{
    echo "\nInvalid Input! the input must have 4 numbers\n"; // Invalid Input message.
}

//-----x-----x-----x-----

?>