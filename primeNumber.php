<?php

// Declaring 'readline' for enter the number:-
$number = readline("Enter the number: ");

// Condition for number 1:-
if($number == 1){
    echo "$number neither prime nor composite number"."\n";
}
elseif ($number > 1){

    $check = true;
    for ($i = 2; $i < $number; $i++){
        if($number % $i == 0){
            $check=  false;
        }
    }

//    Assigning condition for the given the number:-
    if($check){
        echo "$number is a prime number"."\n";
    }
    else{
        echo "$number is not a prime number"."\n";
    }

}

//-----x-----x-----x-----

?>