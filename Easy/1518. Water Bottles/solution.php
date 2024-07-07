<?php
class Solution
{
    /**
     * @param Integer $numBottles
     * @param Integer $numExchange
     * @return Integer
     */
    public function numWaterBottles($numBottles, $numExchange)
    {
        $totalUsedBoottles = $numBottles;

        while ($numBottles >= $numExchange) {
            $newBottles = intdiv($numBottles, $numExchange);
            $remainingUsedBottles = $numBottles % $numExchange;
            $totalUsedBoottles += $newBottles;
            $numBottles = $newBottles + $remainingUsedBottles;

        }
        return $totalUsedBoottles;
    }
}

$solution = new Solution();

$result = $solution->numWaterBottles(5, 5);

echo $result;
