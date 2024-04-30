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

$result = $solution->countValidWords("alice and  bob are playing stone-game10");

print_r($result);
