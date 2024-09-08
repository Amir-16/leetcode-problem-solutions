<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function minSubsequence($nums)
    {
        rsort($nums);

        $totalSum = array_sum($nums);

        $subsequence = [];

        $subsequenceSum = 0;

        foreach ($nums as $num) {
            $subsequence[] = $num;
            $subsequenceSum += $num;

            if ($subsequenceSum > $totalSum - $subsequenceSum) {
                return $subsequence;
            }
        }
        return $subsequence;
    }
}

$nums = [4, 3, 10, 9, 8];
$solution = new Solution();
$result = $solution->minSubsequence($nums);
print_r($result); // Output: [10, 9, 8] (or any other valid subsequence)
