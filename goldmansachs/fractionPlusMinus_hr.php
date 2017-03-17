<?php
/*
Given an array of integers, calculate which fraction of its elements are positive, which fraction of its elements are negative, and which fraction of its elements are zeroes, respectively. Print the decimal value of each fraction on a new line.
Input Format
The first line contains an integer, , denoting the size of the array. 
The second line contains  space-separated integers describing an array of numbers (a0, a1, ..., a(n-1))

Output Format

You must print the following 3 lines:

A decimal representing of the fraction of positive numbers in the array.
A decimal representing of the fraction of negative numbers in the array.
A decimal representing of the fraction of zeroes in the array.
Sample Ip:
6
-4 3 -9 0 4 1     
Sample Ot:
0.500000
0.333333
0.166667
*/
$n = trim(fgets(STDIN));
$arr = explode(" ",trim(fgets(STDIN))); $pc = 0; $zc = 0; $nc = 0;
foreach ($arr as $key => $value) {
	if($value < 0) $nc++;
	elseif($value == 0) $zc++;
	else $pc++;
}
print_r($pc/$n."\n".$nc/$n."\n".$zc/$n);

