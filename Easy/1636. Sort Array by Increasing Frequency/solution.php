<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function frequencySort($nums)
    {
        $frequency = array_count_values($nums);

        usort($nums, function ($a, $b) use ($frequency) {

            if ($frequency[$a] === $frequency[$b]) {

                return $b - $a;
            }
            return $frequency[$a] - $frequency[$b];

        });
        return $nums;
    }
}

$solution = new Solution();

$nums = [1, 1, 2, 2, 2, 3];

$result = $solution->frequencySort($nums);

print_r($result);
