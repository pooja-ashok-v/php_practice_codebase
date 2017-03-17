<?php
/* Problem Statement: Array A = (a0,a1,a2); Array B = (b0,b1,b2); 
If ai < bi; Assign B 1 point;
If ai = bi ; Dont assign any points;
If ai > bi; assign A 1 point;

Input Format

The first line contains 3 space-separated integers a0,a1,a2 describing the respective values in triplet A. 
The second line contains 3 space-separated integers b0,b1,b2 describing the respective values in triplet B.

OutPut :
Print two space-separated integers denoting the respective comparison points earned by A and B.
Sample Input

5 6 7
3 6 10
Sample Output

1 1  */
$A = trim(fgets(STDIN));
$A = explode(' ', $A);
$B = trim(fgets(STDIN));
$B = explode(' ', $B);
$pointsB = $pointsA = 0;
for($i=0;$i<3;$i++){
	if($A[$i] < $B[$i])
		$pointsB = $pointsB+1;
	else if($A[$i] > $B[$i])
		$pointsA = $pointsA+1;
}
print_r($pointsA.' '.$pointsB);


?>