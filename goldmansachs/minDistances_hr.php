<?php
/*
Consider an array of n integers, A = [a0,a1,..an-1] . The distance between two indices, i  andj , is denoted by d = |i-j|.

Given ,A find the minimum d(i,j) such that  ai = aj and i notequalto j; . In other words, find the minimum distance between any pair of equal elements in the array. If no such value exists, print -1.
Input Format

The first line contains an integer,n , denoting the size of array A. 
The second line contains n space-separated integers describing the respective elements in array A.
Output Format

Print a single integer denoting the minimum dij  in A; if no such value exists, print -1.
Sample Input

6
7 1 3 4 1 7
Sample Output

3
Explanation:
a1 = a4 = 1 ; d(1,4) = |1-4| = 3;
a0 = a5 = 7; D(0,5) = |0-5| = 5;
min(3,5) = 3;

*/
$n = trim(fgets(STDIN));
$A = explode(" ",trim(fgets(STDIN))); $pos = array(); $i = 0; $diff = array(); $min = -1;
$array_count = array_count_values($A);
foreach($array_count as $k => $v){
	if($v > 1){
	  $pos[$i++] = array_keys($A,$k); 
	}
}
if(is_array($pos)){
    
foreach($pos as $k => $v){
   
	$diff[$k] = abs($v[0] - $v[1]); 
} 
$min = min($diff);

}
print_r($min);





