<?php
/*Consider an array of integers,A= a0, a1, .., an-1 . We define the absolute difference between two elements, ai and  aj(where i notequal to j), to be the absolute value of ai - aj.

Given an array of n integers, find and print the minimum absolute difference between any two elements in the array.
Constraints

2<= n <= 10 ^5;
-10 ^9 <= ai <= 10 ^9
Input Format

The first line contains a single integer denoting n (the number of integers). 
The second line contains n space-separated integers describing the respective values of a0,a1,..an-1.
Output Format

Print the minimum absolute difference between any two elements in the array.
Sample Input 0:
3
3 -7 0
Sample Output 0:
3
With n=3  integers in our array, we have three possible pairs:(3,-7) ,(3,0) , and (-7,0) . The absolute values of the differences between these pairs are as follows:
|3 - (-7)| = 10; |3-0| = 0; |-7-0|=7;
HINT: GREEDY TECHNIC
*/
$n = trim(fgets(STDIN));
$arr = explode(" ",trim(fgets(STDIN)));

