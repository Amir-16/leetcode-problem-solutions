<?php

class Solution {

  
     public $low;
     public $high;
    function countOdds(int $low, int $high) {
        
        if($low % 2 ==0){
            $low++;
        }
        if($high %2 ==0){
            $high --;
        }

        echo ($high -$low)/2 +1;
        
    }
}

$ans = new Solution();
$ans->countOdds(2,9);


?>