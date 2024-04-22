<?php
class Solution
{

    /**
     * @param String[] $sentences
     * @return Integer
     */

    public int $result;
    public function mostWordsFound(array $sentences)
    {

        $sentences = implode(', ', $sentences);

        $words = explode(',', $sentences);

        $tempArray = [];

        foreach ($words as $word) {

            $tempArray[] = str_word_count($word);

        }

        $this->result = max($tempArray);

        return $this->result;

    }
}

$solution = new Solution();

$result = $solution->mostWordsFound(["alice and bob love leetcode", "i think so too", "this is great thanks very much"]);

print_r($result);
