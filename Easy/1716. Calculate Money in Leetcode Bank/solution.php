<?php
class Solution
{
    public function totalMoney($n)
    {
        $total = 0;
        $weeks = floor($n / 7);
        $days = $n % 7;

        for ($i =  1; $i <= $weeks; $i++) {
            $total += (28 + 7 * ($i - 1)) + (7 * $i) * 0.5;
        }

        $remainingMoney = $weeks * 28 + ($weeks * ($weeks - 1) / 2) * 7;

        for ($i = 1; $i <= $days; $i++) {
            $remainingMoney += $weeks + $i;
        }

        return $remainingMoney;
    }
}

// Example usage:
$n = 20;

$solution = new Solution;

echo $solution->totalMoney($n); // Output: 10
