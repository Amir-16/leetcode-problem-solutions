<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function sortedSquares($nums)
    {
        $sortedArray = [];

        foreach ($nums as $num) {

            $sortedArray[] = $num * $num;
        }

        sort($sortedArray);

        return $sortedArray;
    }
}

$solution = new Solution();

$result = $solution->sortedSquares([-4, -1, 0, 3, 10]);

print_r($result);
