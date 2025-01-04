<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Float
     */
    public function minimumAverage($nums)
    {
        $n = count($nums);

        if ($n <= 2) {
            return array_sum($nums) / $n;
        }

        sort($nums);

        // Smallest and largest values
        $min_val = $nums[0];

        $max_val = $nums[$n - 1];

        $second_min = $nums[1];
        $second_max = $nums[$n - 2];

        $avg_no_removal = ($min_val + $max_val) / 2;

        $avg_remove_min = ($second_min + $max_val) / 2;

        $avg_remove_max = ($min_val + $second_max) / 2;

        return min($avg_no_removal, $avg_remove_min, $avg_remove_max);
    }

}
