<?php 
/*
To make a Powerpuff Girl, Professor Utonium requires:

3 units of Ingredient A

6 units of Ingredient B

10 units of Ingredient C



The maximum number of Powerpuff Girls which can be created are 3 as after 3, Professor will run out of Ingredient C.'
Sample TestCase 1
Input
4
2 5 6 3 
20 40 90 50 
Output
8
*/

function production($req_qty,$avlbl_qty){
  return intval((int)$avlbl_qty/(int)$req_qty);
}
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $no_of_ingdt = fgets($fp);
  
  $req_qty_of_ingdt = explode(" ", trim(fgets($fp)));
  $avlbl_qty_of_ingdt = explode(" ",trim(fgets($fp)));
  
  $c = array_map('production', $req_qty_of_ingdt, $avlbl_qty_of_ingdt);
  
  print(min($c))."\n";
  fclose($fp)
?>
