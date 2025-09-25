<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function divideArray($nums)
    {
        $data = array_count_values($nums);

        foreach ($data as $value) {
            if ($value % 2 != 0) {
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution();

var_dump($solution->divideArray([3, 2, 3, 2, 2, 2])); // true
