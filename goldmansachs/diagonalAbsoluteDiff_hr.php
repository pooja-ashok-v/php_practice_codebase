<?php 
/*Problem Statement: Diagonal Sum's absolute difference
Find hte sum of the both diagonal elements and its absolute difference btw them.
Input : N : the no of rows of the matrix
        Matrix elements:
Sample Input:
3
11 2 4
4 5 6
10 8 -12

OutPut: 15
Explanation:
The primary diagonal is: 
11
      5
            -12

Sum across the primary diagonal: 11 + 5 - 12 = 4

The secondary diagonal is:
            4
      5
10
Sum across the secondary diagonal: 4 + 5 + 10 = 19 
Difference: |4 - 19| = 15 */


$n = $k = trim(fgets(STDIN)); $i = 0; $sum = 0; $sum2 = 0; $sum3 = 0; $arr = array();
while($n >0){
	$arr[$i++] = explode(' ',trim(fgets(STDIN)));
    $n--;
}
for($i=0;$i<$k;$i++){
  $sum = $sum + $arr[$i][$i];
}
for($i=($k-1),$j=0;$i>0,$j<$k;$i--,$j++){
  $sum2 = $sum2 + $arr[$j][$i];
   
} 
$sum3 = abs($sum - $sum2);
print_r($sum3);
