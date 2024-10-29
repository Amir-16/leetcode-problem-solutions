<?php
class Solution
{
    /**
     * @param String $text
     * @param String $brokenLetters
     * @return Integer
     */
    public function canBeTypedWords($text, $brokenLetters)
    {
        $pattern = '/[' . preg_quote($brokenLetters, '/') . ']/';

        $words = explode(" ", $text);

        $count = 0;

        foreach ($words as $word) {
            if (!preg_match($pattern, $word)) {
                $count++;
            }
        }
        return $count;
    }
}

$solution = new Solution();

$result = $solution->canBeTypedWords("Hello, World!", "ad");

print_r($result);
