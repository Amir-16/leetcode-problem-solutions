<?php
class Solution
{
    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    public function checkIfExist($arr)
    {
        $numbers = [];

        foreach ($arr as $value) {

            if (in_array($value * 2, $numbers)) {
                return true;
            }

            if (is_int($value / 2) && in_array($value / 2, $numbers)) {
                return true;
            }

            $numbers[] = $value;
        }
        return false;
    }
}

$solution = new Solution();

$arr = [10, 2, 5, 3];

echo $solution->checkIfExist($arr) ? "true" : "false"; // Output: true
