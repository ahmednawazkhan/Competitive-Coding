<?php
/*
Sample TestCase 1
Input
1634
Output
True
Explanation
First of all, what is a Narcissistic Number?
An n-digit number that is the sum of the nth powers of its digits is called an n-narcissistic number.

For example, take the number 1634

1634 = 1^4 + 6^4 + 3^4 + 4^4
So, this is a Narcissistic Number.
*/
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $num = fgets($fp);
  $nums = explode(" ",$num);
  $count = count($nums);
  $res = 0;
  foreach($nums as $v){
    $res +=pow($v,$count);
  }
  echo $res == $num ? "True" : "False";
?>
