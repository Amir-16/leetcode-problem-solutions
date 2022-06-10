<?php

class Solution
{

  
    public $n;

    function subtractProductAndSum(int $n)
    {
        
            $product=1;
            $sum =0;

            $nocrt = $n ."";

            $value = strlen($nocrt);

            for($i= 0; $i<$value;$i++){

                 $product = $product * $nocrt[$i];
                 $sum =$sum + $nocrt[$i];
            }
            

            echo $product - $sum;
      
    }

}


$result = new Solution();
$result->subtractProductAndSum(4421);



?>