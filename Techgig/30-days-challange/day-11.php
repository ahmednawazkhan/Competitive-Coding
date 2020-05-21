<?php
/*
  print the number of uppercase letters on one line and number of lowercase letters on another side. 

Sample TestCase 1
Input
I Am Awesome
Output
3
7

*/
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $str = fgets($fp);
  str_replace(range('A', 'Z'), '', $str, $num_caps); 
  str_replace(range('a', 'z'), '', $str, $num_lower); 
  echo $num_caps."\n".$num_lower;
?>
