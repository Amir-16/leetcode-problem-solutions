<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function thirdMax($nums)
    {
        $first = $second = $third = PHP_INT_MIN;

        foreach ($nums as $num) {
            if ($num > $first) {
                $third = $second;
                $second = $first;
                $first = $num;
            } elseif ($num < $first && $num > $second) {
                $third = $second;
                $second = $num;
            } elseif ($num < $second && $num > $third) {
                $third = $num;
            }
        }

        return $third !== PHP_INT_MIN ? $third : $first;
    }
}

$solution = new Solution();

$result = $solution->thirdMax([2,2,2,1]);

echo $result;
