<?php
/*
Awesome work! We’ve covered a lot of material in this lesson, so let’s review:
1) Strings are collections of text that the computer treats as a single piece of data.
2) A string can be any length and contain any letters, numbers, symbols, or spaces surrounded by quotation marks.
3) In order to include certain characters inside strings we have to use escape sequences.
4) An operator is a character that performs a task in our code.
5) We can use the concatenation operator (.) to combine two strings into one.
6) Variables are a fundamental programming concept which allow us to easily reuse data in our code.
7) We declare a variable using the dollar sign ($) followed by the variable name and then use the assignment operator (=) to give it a value.
8) PHP has variable parsing which allows us to include variables directly in our strings.
9) Once a variable has been assigned, we can change its value. This is called reassignment.
10) We can create an alias for a variable, instead of just a copy, using the reference assignment operator (=&).
11) Operations to the right of the assignment operator will be evaluated before assignment takes place.
12)The concatenating assignment operator (.=) is a shorthand notation for reassigning a string variable to its current 
value appended with another string value.
*/
echo "Hello, Learner!";

echo "\nWe hope you enjoyed this lesson.";

echo "\nAre you excited?" . "\nTo learn more?";

$favorite_language = "PHP";

$message = "$favorite_language is by far our favorite language.";

$message .= " It's yours now too, right?";

echo "\n" . $message . " Right?!";
?>