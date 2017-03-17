<?php
/*John's clothing store has a pile of n loose socks where each sock i  is labeled with an integer, ci , denoting its color. He wants to sell as many socks as possible, but his customers will only buy them in matching pairs. Two socks, i and j, are a single matching pair if .ci = cj;

Given n  and the color of each sock, how many pairs of socks can John sell?
Input Format

The first line contains an integer,n , denoting the number of socks. 
The second line contains n space-separated integers describing the respective values of c0,c1,..c(n-1);
OUTPUT FORMAT:
Print the total number of matching pairs of socks that John can sell.
Sample Input

9
10 20 20 10 10 30 50 10 20225671
Sample Output

3

Explanation : 10 's' (2 pairs); 20's {1 pair}

*/
/*
Find the count of all elements:
if count of each element mod 2 == 0 then that pair is sold*/

$n = trim(fgets(STDIN));
$socks = explode(" ",trim(fgets(STDIN))) ;
$sold = 0;
$count = array();
$count = array_count_values($socks); 
foreach ($count as $key => $value) {
	$sold += floor($value/2); 
} print_r($sold);