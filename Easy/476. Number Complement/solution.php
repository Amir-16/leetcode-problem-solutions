<?php

class Solution
{
    /**
     * @param Integer $num
     * @return Integer
     */
    public function findComplement($num)
    {
        $bitLength = floor(log($num, 2)) + 1;

        $complement = (1 << $bitLength) - 1;

        return $num ^ $complement;
    }
}

$solution = new Solution();

$num = 5;

$result = $solution->findComplement($num);

echo $result;
