<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */

    public $n;
//

    function subtractProductAndSum(int $n)
    {
        
            $product=1;
            $sum =0;
        while($n >0){
        
           

            $product *= ($n % 10);
           $sum += ($n % 10);

            $n = $n/10;

        }

        echo $product - $sum;


    }

}


$result = new Solution();
$result->subtractProductAndSum(4321);



?>