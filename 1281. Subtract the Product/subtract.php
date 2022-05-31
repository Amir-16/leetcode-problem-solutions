<?php

class Solution
{

    function subtractProductAndSum( $n)
    {
        
            $product=1;
            $sum =0;    
        while($n > 0)
        {
            //n % 10 extracts the last digit out of N
            $product *= ($n % 10);
            $sum += ($n % 10);
            $n /= 10;
        }
        echo $product - $sum;
      
    }

}


$result = new Solution();
$result->subtractProductAndSum(4321);


?>