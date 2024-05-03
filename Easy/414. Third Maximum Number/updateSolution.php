<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function thirdMax(array $nums)
    {
        $nums = array_unique($nums); 
        $length = count($nums);

        if ($length < 3) {
            return max($nums);
        }

        rsort($nums);

        if ($length >= 3) {
            return $nums[2]; // Return the third maximum element
        }

        return max($nums); 
    }
}

$solution = new Solution();

$result = $solution->thirdMax([1,1,2]
);

echo $result;