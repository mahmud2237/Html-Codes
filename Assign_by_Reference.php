<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

/*
1.You’ve inherited some code from another developer. You can’t change their code, but you need to add some additional functionality. Instead of using the $very_bad_unclear_name variable as is in your part of the code. Declare a new variable, $order, as a reference to the $very_bad_unclear_name variable.
*/
$order = &$very_bad_unclear_name;
/*
Use the concatenation assignment operator to append more things to $order. Using the concatenating assignment operator (.=)
*/
$order .= "!";
/* Awesome! Now print\echo "the order is" $very_bad_unclear_name variable at the end of the programs.
*/
echo "\nThe order is: $very_bad_unclear_name.";
//print total price here
echo "\nThe total price is for: $order";
