<?php
class Solution
{
    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer[]
     */
    public function relativeSortArray($arr1, $arr2)
    {
        $frequency = [];
        foreach ($arr1 as $num) {
            if (isset($frequency[$num])) {
                $frequency[$num]++;
            } else {
                $frequency[$num] = 1;
            }
        }

        // Initialize the result array
        $result = [];

        // Add elements to result array based on the order in arr2
        foreach ($arr2 as $num) {
            if (isset($frequency[$num])) {
                for ($i = 0; $i < $frequency[$num]; $i++) {
                    $result[] = $num;
                }
                unset($frequency[$num]);
            }
        }

        // For remaining elements not in arr2, sort them and add to result array
        $remaining = [];
        foreach ($frequency as $num => $count) {
            for ($i = 0; $i < $count; $i++) {
                $remaining[] = $num;
            }
        }
        sort($remaining);
        $result = array_merge($result, $remaining);

        return $result;
    }
}

$arr1 = [2, 3, 1, 3, 2, 4, 6, 7, 9, 2, 19];

$arr2 = [2, 1, 4, 3, 9, 6];

$solution = new Solution();

$result = $solution->relativeSortArray($arr1, $arr2);

print_r($result);
