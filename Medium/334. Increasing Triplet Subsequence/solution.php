<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function increasingTriplet($nums)
    {
        $firstNumber = PHP_INT_MAX;

        $secondNumber = PHP_INT_MAX;

        foreach ($nums as $number) {
            if ($number <= $firstNumber) {
                $firstNumber = $number;
            } else if ($number <= $secondNumber) {
                $secondNumber = $number;
            } else {
                return true;
            }
        }
        return false;
    }
}

$solution = new Solution();

$result = $solution->increasingTriplet([5,4,3,2,1]);

echo $result ? "true" : "false";
