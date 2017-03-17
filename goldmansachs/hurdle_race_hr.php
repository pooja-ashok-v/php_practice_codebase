<?php
/*
Dan is playing a video game in which his character competes in a hurdle race by jumping over n hurdles with heights h0,h1,..hn-1. He can initially jump a maximum height of k units, but he has an unlimited supply of magic beverages that help him jump higher! Each time Dan drinks a magic beverage, the maximum height he can jump during the race increases by 1 unit.

Given n,k , and the heights of all the hurdles, find and print the minimum number of magic beverages Dan must drink to complete the race.
Input Format:
	The first line contains two space-separated integers describing the respective values of n (the number of hurdles) and k (the maximum height he can jump without consuming any beverages). 
	The second line contains n space-separated integers describing the respective values of h0,h1,..hn-1.
Output Format:
	Print an integer denoting the minimum number of magic beverages Dan must drink to complete the hurdle race.
Sample Input 0:
5 4
1 6 3 5 2
Sample Output 0:
2
Sample Input 1:
5 7
2 5 4 5 2
Sample Output 1:
0*/

$nk = explode(" ", trim(fgets(STDIN)));
$n = $nk[0]; $k = $nk[1];
$hs = explode(" ", trim(fgets(STDIN)));
$max = max($hs);
$energy = ($max > $k) ? ($max-$k) : 0;
print_r($energy);