<?php

class Solution
{

    public function hammingWeight(int $n)
    {
        $pivot = 1;
        $invert = 0;
        $count = 0;

        for ($i = 0; $i < 32; $i++) {

            if (($n & $pivot) != 0) {
                $count++;
            }

            $pivot = $pivot << 1;
        }

        return $count;
    }
}

$solution = new Solution();
$solution->hammingWeight(00000000000000000000000000001011);
