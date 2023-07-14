<?php

// Declaring "readline" for input:-
$num = readline("Enter the number: ");

// assigning a variable
$factorial = 1;  

// loop and multiply the number below the "$number" itself:-
// Eg:$number = 4
// 1*2*3*4 => 24
for ($i=1; $i <= $num; $i++)   
{  
    $factorial = $factorial * $i;  
}

// Printing the output:-
echo "Factorial of $num is $factorial \n";  

//-----x-----x-----x-----

?>