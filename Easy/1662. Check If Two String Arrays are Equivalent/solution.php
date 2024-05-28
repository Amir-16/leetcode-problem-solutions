<?php
class Solution
{

    /**
     * @param String[] $word1
     * @param String[] $word2
     * @return Boolean
     */
    public function arrayStringsAreEqual($word1, $word2)
    {
        $word1 = implode(",", $word1);

        $mergeFirstWord = str_replace(",", "", $word1);

        $word2 = implode(",", $word2);

        $mergeSecondWord = str_replace(",", "", $word2);

        if ($mergeFirstWord == $mergeSecondWord) {
            return true;
        }
        return false;

    }
}

$solution = new Solution();

$result = $solution->arrayStringsAreEqual(["ab", "c"], ["ac", "b"]);

print_r($result);
