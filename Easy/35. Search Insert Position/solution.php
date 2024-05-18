<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $index = array_search($target, $nums);

        if ($index !== false) {
            return $index;
        } else {

            $position = 0;

            foreach ($nums as $value) {

                if ($target < $value) {
                    return $position;
                }
                $position++;
            }
            return $position;
        }
    }
}

$solution = new Solution();

$result = $solution->searchInsert([1, 3, 5, 6], 2);

print_r($result);
