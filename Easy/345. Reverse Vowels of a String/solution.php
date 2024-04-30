<?php
class Solution
{
    public function reverseVowels($s)
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        $length = strlen($s);

        $left = 0;

        $right = $length - 1;

        while ($left < $right) {

            if (in_array($s[$left], $vowels) && in_array($s[$right], $vowels)) {

                $temp = $s[$left];
                $s[$left] = $s[$right];
                $s[$right] = $temp;
                $left++;
                $right--;

            } elseif (!in_array($s[$left], $vowels)) {

                $left++;

            } elseif (!in_array($s[$right], $vowels)) {

                $right--;
            }
        }

        return $s;
    }
}

$solution = new Solution();

$result = $solution->reverseVowels("leetcode");

print_r($result);
