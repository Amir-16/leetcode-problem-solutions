<?php
class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    public function areOccurrencesEqual($s)
    {
        $characters = str_split($s);

        $charCount = [];

        foreach ($characters as $char) {

            $charCount[$char] = isset($charCount[$char]) ? $charCount[$char] + 1 : 1;
        }

        $charCountValues = array_values(array:$charCount);

        return count(array_unique($charCountValues)) === 1;
    }
}

$solution = new Solution();

$result = $solution->areOccurrencesEqual("abccba");

print_r($result); // Output: true
