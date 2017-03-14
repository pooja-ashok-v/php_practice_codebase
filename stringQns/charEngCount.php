<?php
/* Given a string of lower and uppercase characters, the task is to find that how many characters are at same position as in English alphabets.
Example: abced Ans: 3 (abc)
Example: dafgek Ans: 1 (e)
*/

//Main Program
print_r("Enter the string\t");
$input_string = fgets(STDIN);
//print_r("\nThank you for inputing the string and the string is ".$input_string);
// Call driver program
getEnglishCharacterPosition($input_string);

function getEnglishCharacterPosition($input_string){
    $string_length = strlen($input_string);
    $count = 0;
    print_r("String length Is:".$string_length);
   
    for($i=0,$j='a',$k='A' ; $i<$string_length && $j< 'z' && $k <'Z'; $i++, $j++,$k++)
    {
        if($input_string[$i] == $j || $input_string[$i] == $k){
        	$count++;
        	print_r("\nCahracter IS::".$input_string[$i]);
        }
    }
    print_r("\nTotal Matching character ".$count);

}

?>