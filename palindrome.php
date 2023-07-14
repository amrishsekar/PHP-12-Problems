<?php

// Declaring "readline" for the input:-
$word = readline("Enter the word: ");

// Declaring an empty variable to store reversed value of the "$word":-
(string)$reversedWord = "";

// Reverse loop for "$word":-
// "$i = (strlen((string)$word)) -1" --> this method is for stopping offset error:-
for ($i = (strlen((string)$word)) -1; $i >= 0 ; $i--) { 

    // Pushing the reversed value into the empty variable:-
    $reversedWord .= $word[$i];

}

// Condition writings:-
if ($word == $reversedWord) {
    echo "$word is a palindrome word \n";
}
else {
    echo "$word is not a palindrome word \n";
}

//-----x-----x-----x-----

?>