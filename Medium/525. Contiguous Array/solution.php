<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxLength(array $nums) {
        $maxLength = 0;
        $count = 0;
        $hashMap = [0 => -1];

        foreach($nums as  $key=> $number) {
            
            if ($number == 0) {
                $count --;
            } else{
                $count ++;
            }

            if(array_key_exists($count,$hashMap)) {
                $maxLength = max($maxLength,$key - $hashMap[$count]);
            } else {
                $hashMap[$count] = $key;
            }
        }

        return $maxLength;
       
    }
}


$solution = new Solution;

echo $solution->findMaxLength([0,1,0]);

