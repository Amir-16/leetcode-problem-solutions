<?php
class Solution
{
    /**
     * @param Integer $n
     * @param Integer $t
     * @return Integer
     */
    public function smallestNumber($n, $t)
    {
        while (true) {
            $product = $this->digitProduct($n);

            if ($product % $t == 0) {
                return $n;
            }
            $n++;
        }
    }

    private function digitProduct($number)
    {
        $product = 1;

        while ($number > 0) {
            $product *= $number % 10;
            $number = (int) ($number / 10);
        }
        return $product;
    }
}

$solution = new Solution();

$n = 2;

$t = 3;

$result = $solution->smallestNumber($n, $t);

print_r($result);
