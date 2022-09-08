<?php

class Solution {

     public $nums;

    function arraySign(array $nums) {

        $product =0;
        $length=count($nums);

        for($i=0;$i<$length;$i++){

            $product=$product + $nums[$i];

            echo($product);
        }
        
    }


}


$solution = new Solution();
$solution->arraySign([-1,-2,-3,-4,3,2,1]);


?>