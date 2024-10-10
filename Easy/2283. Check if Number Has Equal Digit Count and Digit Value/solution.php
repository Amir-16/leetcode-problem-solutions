<?php
class Solution
{
    /**
     * @param String $num
     * @return Boolean
     */
    public function digitCount($num)
    {
        $length = strlen($num);

        for ($i = 0; $i < $length; $i++) {
            $digit = intval($num[$i]);

            $countVal = substr_count($num, strval($i));

            if ($digit != $countVal) {
                return false;
            }
        }

        return true;
    }
}

$solution = new Solution();

$result = $solution->digitCount('1210');

print_r($result);
