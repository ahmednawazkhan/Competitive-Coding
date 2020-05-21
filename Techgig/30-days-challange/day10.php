<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $val = fgets($fp);
  $arr = (explode(" ",fgets($fp)));
  sort($arr);
  
  print($arr[count($arr)-2]);
?>
