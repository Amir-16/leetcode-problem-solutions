<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function findMaxK(array $nums)
    {
        $maxPositive = -1;

        foreach ($nums as $number) {
            if ($number > 0 && in_array(-$number, $nums)) {
                $maxPositive = max($maxPositive, $number);
            }
        }

        if ($maxPositive > 0) {
            return $maxPositive;
        } else {
            return -1;
        }

    }
}

// the below code fragment can be found in:

$solution = new Solution();

$result = $solution->findMaxK([-1, 10, 6, 7, -7, 1]);

print_r($result);
