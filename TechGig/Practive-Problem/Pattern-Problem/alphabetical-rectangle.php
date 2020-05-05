<?php
//https://www.techgig.com/practice/question/alphabetical-rectangle/TnRMeVJxS3VqQzFWNjFlbUNzMjkrNW04Wjl2U0k5VENWc0hRK0FaY1Fadz0=/1
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);
  for($i=1;$i<=$n;$i++)
	{
		for($j=1;$j<=5;$j++)
		{
			if($j<5)
				echo chr($i+64)." ";
			else
				echo chr($i+64);
		}
		if($i<$n)
			echo "\n";
	}
?>
