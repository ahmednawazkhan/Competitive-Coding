<?php
//url: https://www.techgig.com/practice/question/pattern-problem-43/YzY0RVpMZGpodHErOTRMN3BIbURBL3JuWXE3NE00cGF6ai9iM0FaazFqTT0=/1
/*
*Solved by : Anshul pareek
*problem: input: 5
output:
        0 
      1 0 1
    2 1 0 1 2
  3 2 1 0 1 2 3
4 3 2 1 0 1 2 3 4
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
            echo $prt--;
          if($prt == 0 && $i!=1)
            $flag = false;
        }else{
          if($i==1){
            echo $prt++." ";
          }else{
            echo $prt++;
          }
        }
      }else{
        echo " ";
      }
    }
    echo $i<$n?"\n":'';
	}
?>
