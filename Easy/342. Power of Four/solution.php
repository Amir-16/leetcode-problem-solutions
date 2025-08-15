<?php
class Solution
{
    /**
     * @param Integer $n
     * @return Boolean
     */
    public function isPowerOfFour($n)
    {
        if ($n < 1) {
            return false;
        }
        while ($n % 4 == 0) {
            $n /= 4;
        }
        return $n == 1;
    }
}

$solution = new Solution();
var_dump($solution->isPowerOfFour(16)); // true
var_dump($solution->isPowerOfFour(5));  // false
var_dump($solution->isPowerOfFour(1));  // true
