<?php
class Solution
{
    /**
     * @param String $sentence
     * @return Boolean
     */
    public function isCircularSentence($sentence)
    {
        $words = explode(" ", $sentence);
        
        $n = count($words);

        for ($i = 0; $i < $n; $i++) {
            $currentWord = $words[$i];
            $nextWord = $words[($i + 1) % $n];

            if ($currentWord[strlen($currentWord) - 1] !== $nextWord[0]) {
                return false;
            }
        }

        return true;
    }
}

$solution = new Solution();

$sentence = "leetcode is cool";

$result = $solution->isCircularSentence($sentence);

print_r($result);
