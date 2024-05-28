<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function containsDuplicate($nums)
    {
        $uniqueArray = array_unique($nums);

        if (count($uniqueArray) === count($nums)) {
            return false;
        }
        return true;
    }
}

$solution = new Solution();

$result = $solution->containsDuplicate([1, 2, 3, 1]);

print_r($result);
