<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);

	for($i=1;$i<=$n;$i++)
	{
		for($j=1;$j<=$n-$i;$j++)
			echo "  ";
		for($j=1;$j<2*$i;$j++)
		{
			if($j<2*$i-1)
				echo chr(i+64)." ";
			else
				echo chr(i+64);
		}
		if(i<n)
			echo "\n";
	}
?>
