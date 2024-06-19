<?php
class Solution
{
    /**
     * @param String[] $words
     * @param String $separator
     * @return String[]
     */

    public function splitWordsBySeparator($words, $separator)
    {
        $result = [];
        foreach ($words as $word) {
            
            $split = explode($separator, $word);

            $pieces = array_filter($split, function ($value) {
                return !is_null($value) && $value != '';
            });
            $result = array_merge($result, $pieces);
        }

        return $result;
    }
}

$solution = new Solution;

$result = $solution->splitWordsBySeparator(["one.two.three", "four.five", "six"], '.');

print_r($result);
