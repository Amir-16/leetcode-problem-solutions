<?php
class Solution
{
    /**
     * @param Integer $n
     * @return Boolean
     */
    public function isPowerOfTwo($n)
    {
        return $n > 0 && ($n & ($n - 1)) === 0;
    }
}

$solution = new Solution();

$result = $solution->isPowerOfTwo(16);

var_dump($result);
