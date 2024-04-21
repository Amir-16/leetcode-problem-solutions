<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */

    public function singleNumber(array $nums)
    {

        $result = 0;
        foreach ($nums as $num) {
            $result ^= $num;

        }
        return $result;

    }
}

$solution = new Solution();

$result = $solution->singleNumber([2, 2, 1, 1, 4]);

echo $result;
