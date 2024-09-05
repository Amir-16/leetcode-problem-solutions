<?php
class Solution
{
    /**
     * @param String $s
     * @return String
     */
    public function maximumOddBinaryNumber($s)
    {
        $ones = substr_count($s, "1");
        $zeros = substr_count($s, "0");

        if ($ones == 0) {
            return 0;
        }

        return str_repeat('1', $ones - 1) . str_repeat('0', $zeros) . '1';
    }
}

$solution = new Solution();

echo $solution->maximumOddBinaryNumber('010');
