<?php

// Declaring "readline" for input:-
(int)$number = readline("Enter the number: ");

// Declaring empty an variable "$sum":-
$sum = 0;

// looping the input:-
for ($i=0; $i < strlen($number); $i++) {

    // Summing every number through loop:-
    $sum += $number[$i];

}

// Writing "if" condition for summation:-
if ($number > 9) {
    echo "The summation of $number is $sum"."\n";
}
else {
    echo "$number is a single digit number, can't able to sum"."\n";
}

//-----x-----x-----x-----

?>