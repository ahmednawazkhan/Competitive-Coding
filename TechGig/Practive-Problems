<?php
//https://www.techgig.com/practice/question/pattern-problem-36/eWRwM1ByRDc4VTVsaFc3SmY3OWdSbFI2bXhoTUlGTUNoaVZYQzhzWXArOD0=/1
/*Solved by : Anshul Pareek

*/
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);
  $cnt = 1;
  $flag = true;
  $val = 0;
  for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n-$i;$j++){
      echo "  ";
    }
    $val = $i+($i-1);
    $loop = $val+$val-1;
    for($k=1; $k<=$loop; $k++){
      if($k%2 != 0){
        echo $val;
      }else{
        echo " ";
      }
    }
    
    echo $i<$n?"\n":'';
  }
?>
