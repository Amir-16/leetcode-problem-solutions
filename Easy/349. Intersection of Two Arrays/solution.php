<?php
class Solution {

       /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection(array $nums1,array $nums2) {
    
        $result = [];

        $result = array_intersect($nums1, $nums2);
        
        return array_unique($result);
    }
}


$solution = new Solution();

$nums1 = [1,2,2,1];

$nums2 = [2,2];

$result = $solution->intersection($nums1, $nums2);

print_r($result);