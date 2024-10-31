<?php
class Solution
{
    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    public function gcdOfStrings($str1, $str2)
    {
        if ($str1 . $str2 !== $str2 . $str1) {
            return "";
        }

        $gcdLength = $this->gcd(strlen($str1), strlen($str2));

        return substr($str1, 0, length: $gcdLength);
    }

    private function gcd($a, $b)
    {
        if ($b === 0) {
            return $a;
        }

        return $this->gcd($b, $a % $b);
    }
}

$solution = new Solution();

$str1 = "ABCABC";
$str2 = "ABC";

echo $solution->gcdOfStrings($str1, $str2);
