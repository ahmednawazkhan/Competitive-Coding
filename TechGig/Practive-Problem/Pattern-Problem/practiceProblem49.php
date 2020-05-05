<?php
//url: https://www.techgig.com/practice/question/pattern-problems-49/bWViYldSa2ppbDFvd3Y5ODVKb1BPQ1RmTTNIcytHb1BiUHFvSXc2UFRnMD0=/1
  /* Read input from STDIN. Print your output to STDOUT*/
  /*
  input: 5
  output: 
  9 9 9 9 9 9 9 9 9
  7 7 7 7 7 7 7
    5 5 5 5 5
      3 3 3
        1
  */
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);
  for($i=$n;$i>=1;$i--){
    for($j=$n;$j>$i;$j--){
        echo "  ";
    }
    $val = $i*2-1;
    $loop = $val+$val-1;
    for($k=1;$k<=$loop;$k++){
      if($k%2!=0){
        echo $val;
      }else{
        echo " ";
      }
    }
echo $i!=1?"\n":'';
  }
?>
