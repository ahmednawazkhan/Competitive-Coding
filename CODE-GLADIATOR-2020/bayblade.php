<?php /*The maximum number of fights Team G-Revolution can win is 2 when they are arranged optimally or fight in an optimal order.



Team G-Revolution needs help with the device. Tyson has heard about your skills and called you up to help them shuffle their positions in an order such that they would be able to win the maximum number of fights. Can you help Tyson and Team G-Revolution?



Input Format
The first line of input consists of the number of test cases, T

The first line of each test case consists of the number of members each team can have, N.

The second line of each test case consists of N space-separated integers representing the power of beyblades of Team G-Revolution members.


The third line of each test case consists of N space-separated integers representing the power of beyblades of opponent team members.



Constraints
1<= T <=100000
1<= N <=100000

0<= Power of Beyblade <= LLONG_MAX 



Output Format
For each test case, print the maximum number of fights Team G-Revolution can win if they go to fight in an optimal manner.

Sample TestCase 1
Input
1
10
3 6 7 5 3 5 6 2 9 1 
2 7 0 9 3 6 0 6 2 6 
Output
7*/
function pow1($n,$fp)
{
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
