<?php
class Solution
{
    /**
     * @param Integer[] $arr
     * @return Integer
     */
    public function lenLongestFibSubseq($arr)
    {
        $n         = count($arr);
        $indexMap  = array_flip($arr);
        $dp        = [];
        $maxLength = 0;

        for ($j = 0; $j < $n; $j++) {
            for ($i = 0; $i < $j; $i++) {
                $x = $arr[$i];
                $y = $arr[$j];
                $z = $x + $y;

                if (isset($indexMap[$z])) {
                    $k = $indexMap[$z];

                    if (! isset($dp["$i,$j"])) {
                        $dp["$i,$j"] = 2;
                    }

                    $dp["$j,$k"] = $dp["$i,$j"] + 1;
                    $maxLength   = max($maxLength, $dp["$j,$k"]);
                }
            }
        }

        return $maxLength >= 3 ? $maxLength : 0;
    }
}

$arr = [1, 3, 7, 11, 12, 14, 18];

$solution = new Solution();

echo $solution->lenLongestFibSubseq($arr); // Output: 4
