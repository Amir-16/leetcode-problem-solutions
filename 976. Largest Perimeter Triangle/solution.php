<?php

class Solution {

    function largestPerimeter(array $nums) {

      sort($nums);

        $sum =0;
        $n = sizeof($nums);

        for($i= $n-1; $i>1 ;--$i){
        
        //    $sum = $sum + $nums[$i];
        if($nums[$i -1] + $nums[$i-2] > $nums[$i]){

            $total =$nums[$i] + $nums[$i-1] +$nums[$i -2];

            echo $total;
        }

        return 0;
           
        }

    echo $sum;
  
        
    }
}

$solution = new Solution();

$solution->largestPerimeter([1,2,]);



?>