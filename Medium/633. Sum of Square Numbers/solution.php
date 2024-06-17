<?php
class Solution
{
    /**
     * @param Integer $c
     * @return Boolean
     */
    public function judgeSquareSum($c)
    {
        if ($c === 1 || $c === 0) {
            return true;
        }

        for ($a = 0; $a * $a <= $c; $a++) {
            $bSquared = $c - $a * $a;
            $b = intval(sqrt($bSquared));
            if ($b * $b == $bSquared) {
                return true;
            }
        }
        return false;      
    }
}

$solution = new Solution();

$result = $solution->judgeSquareSum(4);

print_r($result);
