<?php
class Solution
{
    /**
     * @param Integer $num
     * @return Integer
     */
    public function minimumSum($num)
    {
        $digits =str_split($num);

        sort($digits);

        $num1 = $digits[0] *10 + $digits[2];

        $num2 = $digits[1] * 10 + $digits[3];

        return $num1 + $num2;
    }
}

$solution = new Solution();

$result = $solution->minimumSum(123456);

echo $result; // Output: 21
