<?php
/* 
Karl has an array of  integers defined as A= a0,a1,..an-1. In one operation, he can delete any element from the array.

Karl wants all the elements of the array to be equal to one another. To do this, he must delete zero or more elements from the array. Find and print the minimum number of deletion operations Karl must perform so that all the array's elements are equal.
Input Format

The first line contains an integer, n, denoting the number of elements in array A. 
The next line contains n space-separated integers where element i corresponds to array element ai (0<=i<n).
Output Format

Print a single integer denoting the minimum number of elements Karl must delete for all elements in the array to be equal.
Sample Input
5
3 3 2 1 3
Sample Output

2   
*/

$n = trim(fgets(STDIN));
$arr = explode(" ",trim(fgets(STDIN))); 
$count = array_count_values($arr);
$max = max($count); $length = count($arr); $del = $length - $max;
print_r($del);
?>