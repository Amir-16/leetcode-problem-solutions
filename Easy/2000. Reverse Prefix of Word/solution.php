<?php
class Solution
{

    /**
     * @param String $word
     * @param String $ch
     * @return String
     */
    public function reversePrefix(string $word, string $ch)
    {
        $index = strpos($word, $ch);

        if ($index === false) {
            return $word;
        }

        return $firstConcateWord = substr($word, 0, $index + 1);

        $data = strrev($firstConcateWord) . substr($word, $index + 1);

        return $data;

    }
}

$solution = new Solution();

$result = $solution->reversePrefix("abcdefd", "d");

print_r($result);
