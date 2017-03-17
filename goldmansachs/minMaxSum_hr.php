<?php
/*Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers. Then print the respective minimum and maximum values as a single line of two space-separated long integers.
Input Format:
A single line of five space-separated integers.
Output Format:
Print two space-separated long integers denoting the respective minimum and maximum values that can be calculated by summing exactly four of the five integers. (The output can be greater than 32 bit integer.)
Sample IP:
1 2 3 4 5
Sample OT:
10 14 */

$arr = explode(" ", trim(fgets(STDIN)));
$min = min($arr);
$max = max($arr); $minS = 0; $maxS = 0;
foreach($arr as $key => $value){
	if($value != $min){
	$maxS += $value;
	} if($value != $max){
	$minS += $value;
	}
}
print_r($minS."\t".$maxS);