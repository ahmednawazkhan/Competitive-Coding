<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);
  for($i=1;$i<=$n;$i++)
	{
		for($j=1;$j<=5;$j++)
		{
			if($j<5)
				echo chr($j+64)." ";
			else
				echo chr($j+64);
		}
		if($i<$n)
			echo "\n";
	}
?>
