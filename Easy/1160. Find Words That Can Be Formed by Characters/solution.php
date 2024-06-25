<?php
class Solution
{
    /**
     * @param String[] $words
     * @param String $chars
     * @return Integer
     */
    public function countCharacters($words, $chars)
    {
        $characterCount = array_count_values(str_split($chars));

        $totalLength = 0;

        foreach ($words as $word) {
            $wordCount = array_count_values(str_split($word));

            $canBuildWord = true;

            foreach ($wordCount as $char => $count) {

                if (!isset($characterCount[$char]) || $characterCount[$char] < $count) {
                    $canBuildWord = false;
                    break;
                }
            }

            if ($canBuildWord == true) {
                $totalLength += strlen($word);
            }
        }

        return $totalLength;

    }
}

$solution = new Solution();

$words = ["cat", "bt", "hat", "tree"];

$chars = "atach";

$result = $solution->countCharacters($words, $chars);

print_r($result);
