<?php
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function fib($n)
    {
        if ($n <= 1) {
            return $n;
        }

        $previous = 0;
        $current = 1;

        for ($i = 2; $i <= $n; $i++) {

            $sum = $previous + $current;
            $previous = $current;
            $current = $sum;
        }
        return $current;
    }
}

$solution = new Solution();

$result = $solution->fib(6);

echo $result; // Output: 8
