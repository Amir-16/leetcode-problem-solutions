<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */

    //  this interesting prblem check the uniqueness of two integers arrays  . array_intersect first fill
    // all elements from array1  . thats why we have to check the uniqueness of two integers
    function intersect(array $nums1, array $nums2) {

        $result = [];

        $count1 = array_count_values($nums1);
        $count2 = array_count_values($nums2);

        foreach ($count1 as $key => $number) {

            if(isset($count2[$key])) {

                $intersectCount = min($number , $count2[$key]);

                $result = array_merge($result, array_fill(0 , $intersectCount, $key));
            }

        }
     
        return $result;
    }
}


$solution = new Solution();

$nums1 = [1,2,2,1];

$nums2 = [2];

$result = $solution->intersect($nums1, $nums2);

print_r($result);