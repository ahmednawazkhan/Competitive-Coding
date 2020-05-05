<?php
//url: https://www.techgig.com/practice/question/pattern-problems-46/OFR1cWF0cFhPMWJFUEwvOFpIQmJBWVJEOGhDYlB4bzNFMWY1R0g1dU83cz0=/1
  /* Read input from STDIN. Print your output to STDOUT*/
  /*
  input : 5
  output:
        A
      A B A
    A B C B A
  A B C D C B A
A B C D E D C B A

  */
  $fp = fopen("php://stdin", "r");
  //Write code here
  $n = fgets($fp);

  for($i=1;$i<=$n;$i++)
	{
		$k=1;
		for($j=1;$j<=$n-$i;$j++)
			echo "  ";
		for($j=1;$j<2*$i;$j++)
		{
			if($j<$i)
			{
				echo chr($k+64);
				$k++;
			}
			else
			{
				echo chr($k+64);
				$k--;
			}
			if($j<2*$i-1)
				echo " ";
		}
		if($i<$n)
			echo "\n";
	}
?>
