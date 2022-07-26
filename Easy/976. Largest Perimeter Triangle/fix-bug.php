<?php

class Solution {

    function largestPerimeter(array $nums) {

        sort($nums);

        $n = sizeof($nums);

        for($i= $n-3; $i>=0 ; --$i){
        
        //    $sum = $sum + $nums[$i];
        $total =0;
        if($nums[$i ] + $nums[$i +1 ] >= $nums[$i + 2]){

        $total= ($nums[$i] +$nums[$i + 1] + $nums[$i + 2] );

        echo $total;

        } else {

        echo 1;
        } 
           
        }
    }
}

$solution = new Solution();

$solution->largestPerimeter([
    [1, 2, 1]
]);


?>
