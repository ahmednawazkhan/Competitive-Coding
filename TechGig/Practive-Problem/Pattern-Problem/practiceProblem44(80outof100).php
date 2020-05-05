<?php
//url: https://www.techgig.com/practice/question/pattern-problem-44/aERwSU5BVldoQkJ3bUJidVNiMFIzdExTN2ZTTUtxanh3OWJvVjJWSTYyTT0=/1
/*
*Solved by : Anshul pareek
*problem: input: 5
output:
        A 
      B A B
    C B A B C
  D C B A B C D
E D C B A B C D E
*/
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);
  $cnt = $dec = 0;
	for($i=1;$i<=$n;$i++)
	{
		for($j=1;$j<=$n-$i;$j++)
			echo "  ";
  $prt = $i-1;
		$val = $i+($i-1);
    $loop = $val+$val-1;$flag = true;
    for($k=1; $k<=$loop; $k++){
      if($k%2 != 0){
        if($prt>0 && $flag){
            echo chr(65+$prt--);
          if($prt == 0 && $i!=1)
            $flag = false;
        }else{
          if($i==1){
            echo chr(65+$prt++)." ";
          }else{
            echo chr(65+$prt++);
          }
        }
      }else{
        echo " ";
      }
    }
    echo $i<$n?"\n":'';
	}
?>
