<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer
     */
    private $result;
    function getCommon(array $nums1,array $nums2) {

        $commonData = array_intersect($nums1 , $nums2);

        if(!empty($commonData)) {
            $this->result = min($commonData);

             return $this->result;
        } else {
            return -1;
        }
    }
}

$solution = new Solution();

$nums1 = [1,2,4,3,1];

 //$nums2 = [1,2];
//$nums2 = [7,8];

$result = $solution->getCommon($nums1, $nums2);

print_r($result);