<?php
//url: https://www.techgig.com/practice/question/pattern-problem-40/T3R0YUsxRzBnZHUvQUszZS91bVd0b2pNKzh5UHZ2eUduVzFiWWdvVHhQRT0=/1
/*
*Solved by : Anshul pareek
*problem: input: 5
output:
        1
      3 2 1
    5 4 3 2 1
  7 6 5 4 3 2 1
9 8 7 6 5 4 3 2 1
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
        echo $cnt--;
      }else{
        echo " ";
      }
    }
    
    echo $i<$n?"\n":'';
	}
?>
