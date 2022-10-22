<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    public $arr;

    function sumOddLengthSubarrays(array $arr) {

        $length = count($arr);

        //echo $length;
         $sum= 0;
        for( $i=0;$i<$length; $i++){

            for($j = $i; $j< $length;$j+=2){

                for($k=$i; $k<=$j;$k++){

                    $sum += $arr[$k];
                }

            }
            
        }

        return  $sum;
        
    }
}

$solution = new Solution();

$solution->sumOddLengthSubarrays([10,11,12]);


?>