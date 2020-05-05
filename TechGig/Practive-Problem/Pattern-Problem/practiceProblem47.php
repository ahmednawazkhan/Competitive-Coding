<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);
for($i=$n;$i>=1;$i--)
	{
		for($j=1;$j<=$n-$i;$j++)
			echo "  ";
		for($j=1;$j<2*$i;$j++)
		{
			if($j<2*$i-1)
				echo "*"." ";
			else
				echo "*";
		}
		if($i>1)
			echo "\n";
	}
