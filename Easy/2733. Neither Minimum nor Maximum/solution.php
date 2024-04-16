<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */

    public function findNonMinOrMax(array $nums)
    {

        $length = count($nums);

        if ($length == 0 || $length == 1 || $length == 2) {
            return -1;
        }

        sort($nums);

        $min = min($nums);

        $max = max($nums);

        foreach ($nums as $num) {
            if ($num === $min || $num === $max) {
                continue;
            }
            return $num;
        }
    }
}

$solution = new Solution();

$result = $solution->findNonMinOrMax([3, 2, 1, 4]);

echo $result;
