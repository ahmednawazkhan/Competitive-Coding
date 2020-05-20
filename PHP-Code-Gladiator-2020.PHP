<?php
function pow1($n,$fp)
{
    // $a[$n],$b[$n];
    $c=0;$v=0;
    $a = $b = [];
    $a = explode(" ",trim(fgets($fp)));
    $b = explode(" ",trim(fgets($fp)));

    rsort($a); //Sort the powers in descending order
    rsort($b);
    for($i=0;$i<$n;$i++)
        for($j=$v;$j<$n;$j++)
        {
            if($a[$i]>$b[$j])
                {
                    $c++;
                    $v=$j+1;
                    break;
                }
        }
    print($c."\n");// \n in required to avoid whitespace errors
}
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $t = fgets($fp);
  $co=0;
    while($co!=$t) // No of test cases
    {
        $n = fgets($fp);
        pow1($n, $fp); //Function to calculate power
        $co++;
    }

?>
