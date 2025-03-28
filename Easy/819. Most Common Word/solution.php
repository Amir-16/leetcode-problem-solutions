<?php
class Solution
{
    /**
     * @param String $paragraph
     * @param String[] $banned
     * @return String
     */
    public function mostCommonWord($paragraph, $banned)
    {
        $paragraph = strtolower($paragraph);

        $words = preg_split('/\W+/', $paragraph, -1, PREG_SPLIT_NO_EMPTY);

        $wordCount = [];

        $bannedWords = array_flip($banned);

        $maxCount = 0;

        $mostCommonWord = "";

        foreach ($words as $word) {
            
            if (isset($bannedWords[$word])) {
                continue;
            }
            if (! isset($wordCount[$word])) {
                $wordCount[$word] = 0;
            }

            $wordCount[$word]++;

            if ($wordCount[$word] > $maxCount) {
                $maxCount       = $wordCount[$word];
                $mostCommonWord = $word;
            }

        }

        return $mostCommonWord;

    }
}

$solution = new Solution();

$paragraph = "a, a, a, a, b,b,b,c, c";

$banned = ["a"];

$result = $solution->mostCommonWord($paragraph, $banned);

print_r($result);
