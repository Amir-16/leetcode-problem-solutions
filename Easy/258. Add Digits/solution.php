<?php
class Solution
{
    /**
     * @param Integer $num
     * @return Integer
     */
    public function addDigits($num)
    {
        if ($num === 0) {
            return 0;
        }

        while ($num >= 10) {

            $num = array_sum(str_split((string) $num));
        }
        return $num;

    }
}

$solution = new Solution();

$result = $solution->addDigits(38);

echo $result;
