<?php
class Solution
{
    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    public function addStrings($num1, $num2)
    {
        $sum = 0;

        $sum = bcadd($num1, $num2);

        return $sum;

    }
}

$solution = new Solution();

$result = $solution->addStrings('3876620623801494171', '6529364523802684779');

var_dump($result);
