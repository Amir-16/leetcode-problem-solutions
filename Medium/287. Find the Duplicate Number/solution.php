<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate(array $nums)
    {
        
        foreach (array_count_values($nums) as $key => $value) {

            if( $value > 1) {
                return $key;
            }
        }
    }
}

$solution = new Solution();

$nums = [1, 5, 5, 3, 5, 3,5];

echo $solution->findDuplicate($nums);