<?php
class Solution
{
    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    public function lemonadeChange($bills)
    {
        $five = 0;
        $ten = 0;

        foreach ($bills as $bill) {
            if ($bill === 5) {
                $five++;
            } elseif ($bill === 10) {
                if ($five == 0) {
                    return false;
                }
                $five--;
                $ten++;
            } elseif ($bill === 20) {
                if ($ten > 0 && $five > 0) {
                    $ten--;
                    $five--;
                } elseif ($five >= 3) {
                    $five -= 3;
                } else {
                    return false;
                }
            }
        }

        return true;
    }
}

$solution = new Solution();

$bills = [5, 5, 5, 10, 20];

echo $solution->lemonadeChange($bills) ? "true" : "false";
