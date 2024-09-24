<?php
class Solution
{
    public function shortestPalindrome($s)
    {
        $rev_s = strrev($s);
        $new_s = $s . '#' . $rev_s;

        $n = strlen($new_s);
        $kmp = array_fill(0, $n, 0);

        for ($i = 1; $i < $n; $i++) {
            $j = $kmp[$i - 1];

            while ($j > 0 && $new_s[$i] != $new_s[$j]) {
                $j = $kmp[$j - 1];
            }

            if ($new_s[$i] == $new_s[$j]) {
                $j++;
            }

            $kmp[$i] = $j;
        }

        $to_add = substr($rev_s, 0, strlen($s) - $kmp[$n - 1]);

        return $to_add . $s;
    }
}

$solution = new Solution();

echo $solution->shortestPalindrome("aacecaaa");
