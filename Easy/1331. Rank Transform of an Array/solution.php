<?php
class Solution
{
    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    public function arrayRankTransform($arr)
    {
        $sortValues = array_values(array_unique($arr));

        sort($sortValues);

        $rank = [];

        foreach ($sortValues as $key => $value) {
            $rank[$value] = $key + 1;
        }

        return array_map(function ($value) use ($rank) {
            return $rank[$value];
        }, $arr);

        return $arr;
    }
}

$solution = new Solution();

$arr = [40, 10, 20, 30];

print_r($solution->arrayRankTransform($arr)); // Output: [5, 1, 5, 3, 3, 4]
