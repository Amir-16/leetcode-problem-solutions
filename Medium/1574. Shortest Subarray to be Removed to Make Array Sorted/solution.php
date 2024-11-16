<?php
class Solution
{
    /**
     * @param Integer[] $arr
     * @return Integer
     */
    public function findLengthOfShortestSubarray($arr)
    {
        $n = count($arr);

        $left = 0;
        while ($left < $n - 1 && $arr[$left] <= $arr[$left + 1]) {
            $left++;
        }

        if ($left == $n - 1) {
            return 0;
        }

        $right = $n - 1;
        while ($right > 0 && $arr[$right - 1] <= $arr[$right]) {
            $right--;
        }

        $result = min($n - $left - 1, $right);

        $i = 0;
        $j = $right;
        while ($i <= $left && $j < $n) {
            if ($arr[$i] <= $arr[$j]) {
                $result = min(value: $result, $j - $i - 1);
                $i++;
            } else {
                $j++;
            }
        }

        return $result;
    }
}
