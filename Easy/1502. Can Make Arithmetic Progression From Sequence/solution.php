<?php


class Solution {

    public $data = array();
    function canMakeArithmeticProgression(array $arr) {

        $data = array();
        $data =sort($arr);

        print_r($data);

        $difference = $data[1] - $data[0];
        $length = count($arr);

        if($length <=2){
            return true;
        }
        else{

            for($i=1; $i +1< $length; ++$i){

                if($data[$i+1]-$data[$i] != $difference){
    
                    return false;
                }else{
    
                    return true;
                }
            } 

        }
        
    }
}


$solution =new Solution();
$solution->canMakeArithmeticProgression([5,3,1]);



?>
