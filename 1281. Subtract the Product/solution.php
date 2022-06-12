<?php

class Solution
{

    function subtractProductAndSum(int $n)
    {
        
            $product=1;
            $sum =0;
        while($n >0){
           
            $mod = $n % 10;
            $product *= $mod;
            $sum += $mod;
            $n /= 10;

        }

        echo $product - $sum;

    }

}


$result = new Solution();
$result->subtractProductAndSum(4421);



?>