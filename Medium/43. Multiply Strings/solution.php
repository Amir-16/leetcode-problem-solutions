<?php
class Solution
{

    public function multiply(string $num1, string $num2)
    {
        $m = strlen($num1);
        $n = strlen($num2);
        $result = array_fill(0, $m + $n, 0);

        for ($i = $m - 1; $i >= 0; $i--) {
            for ($j = $n - 1; $j >= 0; $j--) {
                $multiply = intval($num1[$i]) * intval($num2[$j]);
                $sum = $multiply + $result[$i + $j + 1];

                $result[$i + $j] += intdiv($sum, 10);
                $result[$i + $j + 1] = $sum % 10;
            }
        }

        $resultString = implode('', $result);

        $resultString = ltrim($resultString, '0');


        return $resultString === '' ? '0' : $resultString;
    }

}
