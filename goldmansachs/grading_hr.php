<?php 
/* HackerLand University has the following grading policy:

1.Every student receives a grade in the inclusive range from 0 to 100 .
2. Any grade less than 40 is a failing grade.
Sam is a professor at the university and likes to round each student's grade according to these rules:

1.If the difference between the grade and the next multiple of 5 is less than 3, round grade  up to the next multiple of 5.
2. If the value of grade  is less than 38, no rounding occurs as the result will still be a failing grade.
For example, grade = 84 will be rounded  85 to  but  grade =29 will not be rounded because the rounding would result in a number that is less than 40.

Given the initial value of  gradefor each of Sam's n students, write code to automate the rounding process. For each , round it according to the rules above and print the result on a new line.
Input Format

The first line contains a single integer denoting  (the number of students). 
Each line i of the n subsequent lines contains a single integer,gradei , denoting student i's grade.
Output Format

For each gradei of the n grades, print the rounded grade on a new line.
Sample Input 0

4
73
67
38
33
Sample Output 0

75
67
40
33
*/

$n = trim(fgets(STDIN));
while($n >0){
	$n--;
	$grade = trim(fgets(STDIN));
	if($grade >= 38){
		if( ($grade + 2) % 5 == 0 )
		   $grade = $grade + 2;
		else if(($grade + 1) % 5 == 0 )
			 $grade = $grade + 1;
	 
	 

	}print_r($grade."\n");  
}

