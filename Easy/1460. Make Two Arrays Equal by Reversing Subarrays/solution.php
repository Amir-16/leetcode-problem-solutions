<?php
class Solution
{
    /**
     * @param Integer[] $target
     * @param Integer[] $arr
     * @return Boolean
     */
    public function canBeEqual($target, $arr)
    {
        if (!is_array($target) || !is_array($arr)) {

            return false;
        }

        sort($target);

        sort($arr);

        return $target === $arr;

    }
}

// Test the solution

$target = [1, 2, 2, 3];

$arr = [1, 1, 2, 3];

$solution = new Solution();
$result = $solution->canBeEqual($target, $arr); // Output: true

print_r($result);
