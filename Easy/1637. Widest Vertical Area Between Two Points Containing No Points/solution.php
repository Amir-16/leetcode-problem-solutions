<?php
class Solution
{
    /**
     * @param Integer[][] $points
     * @return Integer
     */
    public function maxWidthOfVerticalArea($points)
    {
        $xCordinates = array_map(function ($point) {
            return $point[0];
        }, $points);

        sort($xCordinates);

        $maxGap = 0;

        for ($i = 1; $i < count($xCordinates); $i++) {
            $maxGap = max($maxGap, $xCordinates[$i] - $xCordinates[$i - 1]);
        }

        return $maxGap;
    }
}

$solution = new Solution();

$points = [[8, 7], [9, 9], [7, 4], [9, 7]];

$result = $solution->maxWidthOfVerticalArea($points);

print_r($result);
