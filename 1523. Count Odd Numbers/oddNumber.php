<?php

class Solution {

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
   
    function countOdds(int $low, int $high) {
        $count = 0;
       for($i= $low; $i<=$high; $i++){
           if($i %2 == 1){
            $count++;
           }
       }

       return ($high + 1)/2 - $low /2;

        
        
    }
}

$ans = new Solution();
$ans->countOdds(3,7);


?>