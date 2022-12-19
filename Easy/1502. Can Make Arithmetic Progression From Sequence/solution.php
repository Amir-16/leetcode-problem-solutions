<?php


class Solution {

   // public $arr;

    function canMakeArithmeticProgression(array $arr) {

        sort($arr);

        $difference = $arr[1] - $arr[0];

        $length = count($arr);

       //  echo $length;

        if($length== 4 && $difference == 0){
        
               return true;
            }
            if($length <= 2){

                return true;
    
            }elseif($length >3){
    
                 false;
            }
            else{
    
                for($i=1; $i+1< $length; ++$i){
    
                    if($arr[$i+1]-$arr[$i] != $difference){
    
                        return false;
                    }else{
                        return true;
                    }
                }  
                
            }
           
    }
}

$solution =new Solution();
$solution->canMakeArithmeticProgression([13,12,-12,9,9,16,7,-10,-20,0,18,-1,-20,-10,-8,15,15,16,2,15]);



?>
