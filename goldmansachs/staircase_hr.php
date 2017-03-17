<?php
/*Consider a staircase of size : n =4;
Observe that its base and height are both equal to , and the image is drawn using # symbols and spaces. The last line is not preceded by any spaces.

Write a program that prints a staircase of size n.
   #
  ##
 ###
####
Input:
A single integer,n , denoting the size of the staircase.
Output Format

Print a staircase of size n using # symbols and spaces.*/

$n = trim(fgets(STDIN));
for($i=1;$i<=$n;$i++){
	for($j=$n;$j>0;$j--)
	{
	  if($i<$j){
	    print_r(' ');
	  }
	  else{
	  print_r('#');
	  }
	   
	} print_r("\n");
}
?>