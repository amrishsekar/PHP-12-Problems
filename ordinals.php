<?php

// Declaring a function:-
function num($number)
{
    // Writing condition for the input value:-
    if (substr($number, -1) == "1" && substr($number, -2) !== "11") {
        return $number . "st";
    } 
    elseif (substr($number, -1) == "2" && substr($number, -2) !== "12") {
        return $number . "nd";
    } 
    elseif (substr($number, -1) == "3" && substr($number, -2) !== "13") {
        return $number . "rd";
    } 
    elseif (preg_match('/[0-9]/', $number)) {
        return $number . "th";
    }
}

// Callback the function:-
echo num("51") . "\n";  

//-----x-----x-----x-----

?>