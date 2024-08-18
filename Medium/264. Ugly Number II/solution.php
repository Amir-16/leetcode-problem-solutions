<?php
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function nthUglyNumber($n)
    {
        $uglyNumbers = [1];

        $r2 = $r3 = $r5 = 0;

        for ($i = 1; $i < $n; $i++) {

            $next2 = $uglyNumbers[$r2] * 2;

            $next3 = $uglyNumbers[$r3] * 3;

            $next5 = $uglyNumbers[$r5] * 5;

            $nextUgly = min($next2, $next3, $next5);

            $uglyNumbers[] = $nextUgly;

            if ($nextUgly == $next2) {
                $r2++;
            }

            if ($nextUgly == $next3) {
                $r3++;
            }

            if ($nextUgly === $next5) {
                $r5++;
            }

        }

        return $uglyNumbers[$n - 1];

    }

}

$solution = new Solution();

echo $solution->nthUglyNumber(10); // Output: 12
