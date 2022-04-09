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

       echo $count;

        
        
    }
}

$ans = new Solution();
$ans->countOdds(3,7);
