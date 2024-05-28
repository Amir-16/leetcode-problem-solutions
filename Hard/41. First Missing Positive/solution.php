<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function firstMissingPositive($nums)
    {
        $n = count($nums);

        for ($i = 0; $i < $n; $i++) {
            while ($nums[$i] > 0 && $nums[$i] <= $n && $nums[$nums[$i] - 1] != $nums[$i]) {
                $temp = $nums[$i];
                $nums[$i] = $nums[$temp - 1];
                $nums[$temp - 1] = $temp;
            }
        }

        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] != $i + 1) {
                return $i + 1;
            }
        }

        return $n + 1;
    }
}

$solution = new Solution();

//$result = $solution->firstMissingPositive([7, 8, 9, 11, 12]);

$result = $solution->firstMissingPositive([1, 2, 0]);

print_r($result);
