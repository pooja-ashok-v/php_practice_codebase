<?php
/* Micro purchased an array A.
A having N integer values. After playing it for a while, he got bored of it and decided to update value of its element. In one second he can increase value of each array element by 1
1. He wants each array element's value to become greater than or equal to K
 Please help Micro to find out the minimum amount of time it will take, for him to do so.

Input: 
First line consists of a single integer, 
T
T, denoting the number of test cases. 
First line of each test case consists of two space separated integers denoting N and K
Second line of each test case consists of N space separated integers denoting the array A
Output:
For each test case, print the minimum time in which all array elements will become greater than or equal to K
Print a new line after each test case.
SAMPLE INPUT 
2
3 4
1 2 5
3 2
2 5 5
SAMPLE OUTPUT 
3
0
Explanation
For first test case,
After 1 second, array will be {2,3,6}
After 2 second, array will be {3,4,7}
After 3 second, array will be {4,5,8}
So it will take 3 second for all array elements to become greater than or equal to 4*/
// main prgrm

/* 2
3 4
1 2 5
3 2
2 5 5 */
$t = trim(fgets(STDIN));
while($t > 0){
	$nk = trim(fgets(STDIN)); 
	$nk = explode(' ', $nk);
	$n = $nk[0]; $k = $nk[1]; 
	$i = 0;
	
	$array = trim(fgets(STDIN));
	$a = explode(' ',$array);


	$result = getTimeToIncreaseArray($a,$k);
	print_r($result."\n");
	$t--;
}
function getTimeToIncreaseArray($a,$k){

$time = 0;
	if($k <= min($a)){
		return $time;
	} else {
	$diff = $k - min($a);
	
		return $diff;
	}
}
?>
