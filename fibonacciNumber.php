<?php  

// Writing function named "fibonacciSeries":-
function fibonacciSeries($limit)
{
    // Assigning initial number for variables:-
    $countAdd = 0;  
    $fibonacciNumOne = 0;  
    $fibonacciNumTwo = 1; 
    // printing initial fibonacci numbers:-
    echo $fibonacciNumOne.' '.$fibonacciNumTwo.' ';  

    // Looping for fibonacci series:-
    while ($countAdd < $limit)  
    {  
        // Assigning and reassigning fibonacci number until the given limit ends:-
        $n3 = $fibonacciNumTwo + $fibonacciNumOne;  
        echo $n3.' ';  
        $fibonacciNumOne = $fibonacciNumTwo;  
        $fibonacciNumTwo = $n3;
        $countAdd = $countAdd + 1;  
    }
    echo  "\n";

}

// Calling the function:-
fibonacciSeries(10);

//-----x-----x-----x-----

?>  