<?php 
/* Given an array of  integers, can you find the sum of its elements?

Input Format

The first line contains an integer, , denoting the size of the array. 
The second line contains  space-separated integers representing the array's elements.

Output Format

Print the sum of the array's elements as a single integer.

Sample Input

6
1 2 3 4 10 11
Sample Output

31
Explanation

We print the sum of the array's elements, which is: .*/
/* Hint: 
//Terminal user friendly solution::

print_r("enter the size of the array\t");
$length = trim(fgets(STDIN));
print_r("Enter the array elements\t");
$i = 0;
while($i<$length){
	$input_array[$i++] = trim(fgets(STDIN));
}
print_r("\nAll inputs are accepted:");
$sum = findArraySum($length, $input_array);
print_r("Final Output::".$sum);

function findArraySum($length , $input_array){
	$out_put = 0;
	foreach ($input_array as $key => $value) {
		$out_put = $out_put + $value;
	}
	return $out_put;
}

*/
//hacker earth solution:
$length = fgets(STDIN);
$input_array = fgets(STDIN);
$sum = findArraySum($length, $input_array);
print_r($sum);
function findArraySum($length , $input_array){
	$out_put = 0;
    $input_array = explode(' ',$input_array);
    
	foreach ($input_array as $key => $value) {
		$out_put = $out_put + $value;
	} 
	return $out_put;
}