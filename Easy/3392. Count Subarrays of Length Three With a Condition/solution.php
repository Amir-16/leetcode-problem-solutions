<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function countSubarrays($nums)
    {
        $count = 0;
        $n     = count($nums);
        for ($i = 1; $i < $n - 1; $i++) {
            if (($nums[$i - 1] + $nums[$i + 1]) === ($nums[$i] / 2)) {
                $count++;
            }
        }
        return $count;
    }
}

$solution = new Solution();

$nums = [1, 2, 1, 4, 1];

$result = $solution->countSubarrays($nums);
echo "Count of subarrays of length three with a condition: " . $result . "\n";
