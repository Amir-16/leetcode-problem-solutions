<?php
class Solution
{
    /**
     * @param Integer $n
     * @param Integer $time
     * @return int
     */
    public function passThePillow($n, $time)
    {
        $totalCycle = 2 * ($n - 1);

        $timeInCycle = $time % $totalCycle;

        if ($timeInCycle < $n) {
            return $timeInCycle + 1;
        } else {
            return $n - ($timeInCycle - $n + 1);
        }

        // return match (true) {

        //     $timeInCycle < $n => $timeInCycle + 1,

        //     default => $n - ($timeInCycle - $n + 1)
        // };

    }
}

// Example 1:

$solution = new Solution();

$n = 8;

$time = 9;

$result = $solution->passThePillow($n, $time);

echo $result; // Output: 5
