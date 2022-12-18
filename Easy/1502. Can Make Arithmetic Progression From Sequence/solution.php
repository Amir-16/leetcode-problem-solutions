<?php


class Solution {

   // public $arr;

    function canMakeArithmeticProgression(array $arr) {

     
        $sortData= sort($arr);

        $difference = $arr[1] - $arr[0];

        $length = count($arr);

        for($i=2; $i< $length;$i--){

            if($arr[$i]-$arr[$i-1] != $difference){

                return false;
            }
        }  
        
        return true;
        
    }
}


$solution =new Solution();
$solution->canMakeArithmeticProgression([5,3,1]);



?>
