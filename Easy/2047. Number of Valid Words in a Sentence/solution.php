<?php
class Solution
{

    /**
     * @param String $sentence
     * @return Integer
     */
    public function countValidWords($sentence)
    {
        // it will preg check check of each word
        $words = preg_split("/[^a-zA-Z]+/", $sentence);

        return $words;

        $validWordCount = 0;

        foreach ($words as $word) {

            if (!empty($word) && ctype_alpha($word)) {
                $validWordCount++;
            }

        }
        return $validWordCount;
    }
}

$solution = new Solution();

$result = $solution->countValidWords("!this  1-s b8d!");

print_r($result);
