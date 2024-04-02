<?php

class Solution {

    function mySqrt($x) {

        if ($x == 0) {
            return 0;
        }
        
        $result = sqrt($x); 
        
        // return the result to the nearest lower integer
        return floor($result);
    }
}
    
$solution = new Solution();

echo $solution->mySqrt(8);
