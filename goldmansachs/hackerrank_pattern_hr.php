<?php
/*
We say that a string, x, contains the word hackerrank if a subsequence of the characters  in s  spell the word hackerrank. For example, haacckkerrannkk does contain hackerrank, but haacckkerannk does not (the characters all appear in the same order, but it's missing a second r).

More formally,p0,p1,..p9 let  be the respective indices of h, a, c, k, e, r, r, a, n, k in string s. If p0<p1<...<p9  is true, then  contains hackerrank.

You must answer q queries, where each query  consists of a string,si . For each query, print YES on a new line if si contains hackerrank; otherwise, print NO instead.

Input Format:
The first line contains an integer denoting  q(the number of queries). 
Each line i of the q subsequent lines contains a single string denoting si.
Output Format:
For each query, print YES on a new line if  contains hackerrank; otherwise, print NO instead.
Sample Input 0:
2
hereiamstackerrank
hackerworld
Sample Output 0:
YES
NO
*/$q = trim(fgets(STDIN)); $hackst = "hackerrank";
 $len = 0; $count = array("a"=>2,"e"=>1,'c'=>1,'k'=>2,'h'=>1,'r'=>2,'n'=>1) ;
while($q > 0){
	$str = fgets(STDIN);
	hackerstr($str,$count);
	$q--; 
}
function hackerstr($str,$count){
		
	foreach($count as $key => $value){
        
		$newCount = substr_count($str,$key); 
         
		if($newCount >= $value){
          
           
            $len++;
		}
        
	} 
	if($len == 7)
	 print_r("YES\n"); 
	 else 
	 print_r("NO\n"); 
}