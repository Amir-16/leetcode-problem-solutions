<?php
class Solution
{
    /**
     * @param String $sentence
     * @param String $searchWord
     * @return Integer
     */
    public $position;

    public function isPrefixOfWord($sentence, $searchWord)
    {
        $words = explode(" ", $sentence);

        foreach ($words as $key => $word) {

            if (strpos($word, $searchWord) === 0) {
                return $key + 1;
            }
        }

        return -1;
    }
}

$solution = new Solution();

$result = $solution->isPrefixOfWord("i love eating burger", "code");

print_r($result);
