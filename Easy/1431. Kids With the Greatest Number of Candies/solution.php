<?php
class Solution
{
    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    public function kidsWithCandies($candies, $extraCandies)
    {
        $maxCandies = max($candies);

        $result = [];

        foreach ($candies as $candy) {

            $result[] = ($candy + $extraCandies) >= $maxCandies;
        }
        return $result;
    }
}

$solution = new Solution();

$result = $solution->kidsWithCandies([2, 3, 5, 1, 3], 3);

print_r($result);
