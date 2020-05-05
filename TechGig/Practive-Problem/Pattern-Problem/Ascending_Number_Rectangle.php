<?php
//url: https://www.techgig.com/practice/question/ascending-number-rectangle/aHBTR2JuNEVJYWFEblNBZzZjZURGYnJrMysrM3JvUXpENXZOejJtK3BJUT0=/1
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);
  for($i=1;$i<=$n;$i++)
	{
		for($j=1;$j<=5;$j++)
		{
			if($j<5)
				echo $j." ";
			else
				echo $j;
		}
		if($i<$n)
			echo "\n";
	}
?>
