<?php
class Solution
{
    /**
     * @param String[] $arr
     * @param Integer $k
     * @return String
     */
    public function kthDistinct($arr, $k)
    {
        $counts = array_count_values($arr);

        $result = array_filter($arr, function ($value) use ($counts) {
            return $counts[$value] === 1;
        });

        $arrValues = array_values($result);

        if ($k > count(value: $arrValues)) {
            return "";
        }

        return $arrValues[$k - 1];
    }
}

$arr = ["d", "b", "c", "b", "c", "a"];

$k = 2;

$solution = new Solution();
$result   = $solution->kthDistinct($arr, $k);

print_r($result);
