<?php
/*
Two cats named A and B are standing at integral points on the x-axis. Cat A is standing at point x and cat B is standing at point  y. Both cats run at the same speed, and they want to catch a mouse named C that's hiding at integral point z on the x-axis. Can you determine who will catch the mouse?

You are given q queries in the form of x,y ,z and . For each query, print the appropriate answer on a new line:

If cat  A catches the mouse first, print Cat A.
If cat B catches the mouse first, print Cat B.
If both cats reach the mouse at the same time, print Mouse C as the two cats fight and mouse escapes.
Input Format

The first line contains a single integer,q , denoting the number of queries. 
Each of the  subsequent lines contains three space-separated integers describing the respective values of x (cat 's location),  y(cat 's location), and  z(mouse 's location).
Output Format

On a new line for each query, print Cat A if cat A catches the mouse first, Cat B if cat B catches the mouse first, or Mouse C if the mouse escapes.
Sample Input 0

3
1 2 3
1 3 2
2 1 3
Sample Output 0

Cat B
Mouse C
Cat A
Explanation 0

Query 0: The positions of the cats and mouse are shown below: A ->B->C: |A-C| = 2 and |B-C| = 1

Cat B will catch the mouse first, so we print Cat B on a new line.

Query 1: In this query, cats A and B reach mouse C at the exact same time: A->C->B : |A-c| = |B-C| = 1

Because the mouse escapes, we print Mouse C on a new line.*/

$q = trim(fgets(STDIN));
while($q > 0){
	$xyz = explode(" ",trim(fgets(STDIN)));
	catmouse($xyz);
	$q--;
}
function catmouse($xyz){
	$AC = abs($xyz[0] - $xyz[2]);
	$BC = abs($xyz[1] - $xyz[2]);
	if($AC > $BC) echo "Cat B \n"; elseif($AC < $BC) echo "Cat A\n"; else echo "Mouse C\n";
}

