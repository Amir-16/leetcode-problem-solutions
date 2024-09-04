<?php
class Solution
{
    /**
     * @param Integer $num1
     * @param Integer $num2
     * @param Integer $num3
     * @return Integer
     */
    public function generateKey($num1, $num2, $num3)
    {
        $str1 = str_pad($num1, 4, "0", STR_PAD_LEFT);
        $str2 = str_pad($num2, 4, "0", STR_PAD_LEFT);
        $str3 = str_pad($num3, 4, "0", STR_PAD_LEFT);

        $key = '';

        for ($i = 0; $i < 4; $i++) {
            $minDigit = min($str1[$i], $str2[$i], $str3[$i]);
            $key .= $minDigit;
        }

        $key = ltrim($key, '0');

        // If the key is empty after removing leading zeros, return "0"
        return $key === '' ? '0' : $key;

    }
}

// Example 1
$num1 = 1;
$num2 = 10;
$num3 = 1000;

$solution = new Solution();

$result = $solution->generateKey($num1, $num2, $num3);

print_r($result);

// echo "\n";

// // Example 2
// $num1 = 987;
// $num2 = 879;
// $num3 = 798;
// echo generateKey($num1, $num2, $num3); // Output: 777
