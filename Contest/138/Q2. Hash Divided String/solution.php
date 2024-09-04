<?php
class Solution
{
    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    public function stringHash($s, $k)
    {
        $n = strlen($s);
        $result = '';

        // Iterate over the string in chunks of length k
        for ($i = 0; $i < $n; $i += $k) {
            $substring = substr($s, $i, $k);
            $sum = 0;

            // Calculate the sum of hash values for the current substring
            for ($j = 0; $j < $k; $j++) {
                $sum += ord($substring[$j]) - ord('a');
            }

            // Calculate hashedChar by taking the sum mod 26
            $hashedChar = $sum % 26;

            // Find the corresponding character in the alphabet and append to result
            $result .= chr($hashedChar + ord('a'));
        }

        return $result;
    }
}

// Example 1
$s = "abcd";
$k = 2;

$solution = new Solution();

$result = $solution->stringHash($s, $k);

var_dump($result);

echo "\n";
