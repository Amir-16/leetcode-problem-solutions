<?php
class Solution
{
    /**
     * @param Integer[] $arr
     * @return Integer[][]
     */
    public function minimumAbsDifference($arr)
    {
        sort($arr);

        $minDiff = PHP_INT_MAX;

        $result = [];

        for ($i = 1; $i < count($arr); $i++) {
            $diff = $arr[$i] - $arr[$i - 1];

            match (true) {
                $diff < $minDiff => [
                    $minDiff = $diff,
                    $result = [[$arr[$i - 1], $arr[$i]]],
                ],
                $diff === $minDiff => $result[] = [$arr[$i - 1], $arr[$i]],
                default => null
            };
        }
        return $result;
    }
}

$solution = new Solution();

$arr = [3, 8, -10, 23, 19, -4, -14, 27];

$result = $solution->minimumAbsDifference($arr);

print_r($result);
