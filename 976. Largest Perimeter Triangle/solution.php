<?php

class Solution {

    function largestPerimeter(array $nums) {

        sort($nums);

        $n = sizeof($nums);

        for($i= $n-3; $i>=0 ; $i--){
        
        //    $sum = $sum + $nums[$i];
        if($nums[$i ] + $nums[$i -1 ] > $nums[$i - 2]){

        $total= ($nums[$i] +$nums[$i - 1] + $nums[$i - 2] );

        echo $total;

        } else {

        echo 0;
        } 
           
        }
    }
}

$solution = new Solution();

$solution->largestPerimeter([3, 6, 2, 3]);


?>
