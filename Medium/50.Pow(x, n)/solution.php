<?php
class Solution
{

    public function myPow($x, $n)
    {
        if ($n == 0) {
            return 1;
        }

        if ($n < 0) {
            $x = 1 / $x;
            $n = -$n;
        }

        return ($n % 2 == 0) ? myPow($x ** 2, $n / 2) : $x * myPow($x ** 2, ($n - 1) / 2);
    }

}
