<?php
$movie = "___";
/*
1.We declared a variable $movie and assigned the string "___" to it. But that’s no fun! Beneath that declaration, 
reassign $movie so that it’s assigned a string containing your favorite movie from when you were a little kid.
*/
$movie = "Titanic"; 
echo "I'm a fickle person, my favorite movie used to be $movie.";
    
/*
2.Below your reassignment of the $movie variable, declare and assign a new variable, $old_favorite. The $old_favorite
variable should have $movie assigned to it.
*/  
$old_favorite = $movie; 
//3.Between the first and second echo statements, reassign the value of $movie to a new string.
$movie = "3 idiots";
echo "\nBut now my favorite is $movie.";
/*
4.Finally, at the end of the program add one last echo statement which uses PHP string parsing to print a string 
containing the $old_favorite variable.
*/
echo "\nBut now my favorite is $old_favorite.";    

?>