<?php
/*
1. We have 82 students going on a class trip. We want to divide the students into groups of 6. Use the modulo operator 
to echo how many students will be left without groups.
*/
$Total_students = 82;
$students_group = 6;
$student_left_without_group = $Total_students % $students_group;
echo $student_left_without_group;