<?php
/*
Lily likes to play games with integers and their reversals. For some integer x, we define  reversed(x) to be the reversal of all digits in x. For example, reversed(123) = 321, reversed(21)=12  , and  reversed(120) = 21.

Logan wants to go to the movies with Lily on some day x satisfying ,i<=x<=j but he knows she only goes to the movies on days she considers to be beautiful. Lily considers a day to be beautiful if the absolute value of the difference between  x and reversed(x) is evenly divisible by k.
Given i,j , and k, count and print the number of beautiful days when Logan and Lily can go to the movies.
Output Format

Print the number of beautiful days in the inclusive range between i and j.

Sample Input

20 23 6
Sample Output

2

Explanation:
Day 20 : Beautiful : abs(20 - 2)/6 = 3;
Day 21: not BEautiful :abs( 21- 12)/6 = 1.5
Day 22 : Beautiful; Day 23 : not BEautiful */

$ijk = explode(" ", trim(fgets(STDIN)));
$i = $ijk[0]; $j = $ijk[1]; $k = $ijk[2]; $beauty = 0;
for($q= $i; $q <= $j; $q++ )
{
	$rev = strrev($q);
	$diff = abs($rev- $q);
	$res = $diff % $k ;
	if($res == 0)
		$beauty++;
}
print_r($beauty);
