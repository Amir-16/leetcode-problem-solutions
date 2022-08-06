<?php

class Solution {

    function twoSum($nums, $target) {
        $extra_array = array();
        
        for ($i = 0;$i < count($nums);$i++) {
            $extra_array[$target - $nums[$i]] = $i;
        }
        
         var_dump($extra_array);
        
        for ($j = 0;$j < count($nums);$j++) {
            if (array_key_exists($nums[$j], $extra_array) && $j !== $extra_array[$nums[$j]]) {
                return array($j, $extra_array[$nums[$j]]);
            }
        }
        
        
        
        return array(0,0);
    }
}