<?php

class Solution
{
    /**
     * @param String[] $s
     * @return NULL
     */
    public function reverseString(&$s)
    {
        $length = count($s);
        $left = 0;
        $right = $length - 1;

        while ($left < $right) {
            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;
            $left++;
            $right--;
        }
    }
}

// Test the function
$solution = new Solution();
$s = ["H", "a", "n", "n", "a", "h"];
$solution->reverseString($s);
print_r($s); // Output: ["h","a","n","n","a","H"]
