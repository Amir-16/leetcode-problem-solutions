<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */

     public $result = [];
    function findDuplicates(array $nums) {
        
        if(count($nums) <= 1) {
            return [];
        }

        foreach(array_count_values($nums) as $key => $value) {

                //run each loop & check for duplicates
                if ($value > 1) {

                  $this->result[] = $key;
                }
        }

        //retrun the duplicates
        return $this->result;
    }
}

$solution = new Solution;


$solution->findDuplicates([4,3,2,7,8,2,3,1]);

print_r($solution);