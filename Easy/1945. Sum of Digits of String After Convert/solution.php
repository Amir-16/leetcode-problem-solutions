<?php

class Solution
{
    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    public function getLucky($s, $k)
    {
        $letter = [
            'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5,
            'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10,
            'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15,
            'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20,
            'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25,
            'z' => 26,
        ];

        $concateLucky = '';

        for ($i = 0; $i < strlen($s); $i++) {
            $concateLucky .= $letter[$s[$i]];
        }

        for ($j = 0; $j < $k; $j++) {
            $sum = 0;

            $sum = array_sum(str_split($concateLucky));
            
            $concateLucky = strval($sum);
        }

        return intval($concateLucky);
    }
}

$s = "leetcode";

$k = 2;

$solution = new Solution();

$result = $solution->getLucky($s, $k);

var_dump($result);
