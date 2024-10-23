<?php
class Solution
{
    /**
     * @param String $s
     * @return String
     */
    public function sortSentence($s)
    {
        $words = explode(' ', $s);

        $sortedWords = [];

        foreach ($words as $word) {

            $position = substr($word, -1);

            $strWord = substr($word, 0, -1);

            $sortedWords[$position] = $strWord;
        }

        ksort($sortedWords);

        $sortedWords = array_values(array:$sortedWords);

        return implode(' ', $sortedWords);
    }
}

$solution = new Solution;

$result = $solution->sortSentence("is2 sentence4 This1 a3");

print_r($result);
