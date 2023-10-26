<?php

// Creates DateTime objects
$datetime1 = date_create('17-09-2016');
$datetime2 = date_create('25-09-2017');

// Calculates the difference between DateTime objects
$interval = date_diff($datetime1, $datetime2);

// Display the result
echo $interval->format('Difference between two dates is: %R%a days');

//-----x-----x-----x-----

?>