<?php
//url: https://www.techgig.com/practice/question/pattern-problem-42/VDVEYW9EeHgreFl1aFFVcE5zQ3NiZmM2eUJzbDBZOVRSaWpWTkN3UjJIaz0=/1
/*
*Solved by : Anshul pareek
*problem: input: 4
output:
        A
      C B A
    E D C B A
  G F E D C B A
*/
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);

	for($i=1;$i<=$n;$i++)
	{
		for($j=1;$j<=$n-$i;$j++)
			echo "  ";
		$val = $i+($i-1);
    $loop = $val+$val-1;
    $cnt = $val;
    for($k=1; $k<=$loop; $k++){
      if($k%2 != 0){
        if($i==1)
          echo chr(65);
        else
          echo chr(64+($val--));
      }else{
        echo " ";
      }
    }
    
    echo $i<$n?"\n":'';
	}
?>
