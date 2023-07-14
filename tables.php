<?php

// Declaring "readline" for the tables number:-
(int)$number = readline("Enter the tables number: ");

// Checking the given input is numeric(number) or not:-
if (is_numeric($number)) {
    // looping and calculating the number until the limit ends:-
    for ($i=1; $i <= 10; $i++) { 

    // Multiply the number and store it into the variable:-
    $answer = $number * $i;
    // Printing the output:-
    echo "$number * $i = $answer \n";

    }
}
// writing "else" condition for the given input is wrong:-
else{
    echo "Please enter numbers only \n";
}

//-----x-----x-----x-----

?>