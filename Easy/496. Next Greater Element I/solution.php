<?php
class Solution
{
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    public function nextGreaterElement($nums1, $nums2)
    {
        $nextGreater = [];
        $stack       = [];
        $result      = [];

        for ($i = count($nums2) - 1; $i >= 0; $i--) {

            $number = $nums2[$i];

            while (! empty($stack) && end($stack) <= $number) {
                array_pop($stack);
            }

            $nextGreater[$number] = empty($stack) ? -1 : end($stack);

            array_push($stack, $number);
        }

        return array_map(function($num) use ($nextGreater) {
            return $nextGreater[$num];
        }, $nums1);

    }
}

$solution = new Solution();

$nums1 = [4, 1, 2, 7, 5, 3, 6];

$nums2 = [1, 3, 4, 2, 7, 5, 6];

$result = $solution->nextGreaterElement($nums1, $nums2);

print_r($result); // Output: [7, 5, 6, 2, 4, 3, -1]
