<?php
class Solution
{
    /**
     * @param String[] $words
     * @return Integer
     */
    public function maximumNumberOfStringPairs($words)
    {
        $count = 0;

        $pairedArray = [];

        foreach ($words as $word) {

            $revWord = strrev($word);

            if (in_array($revWord, $words) && $revWord !== $word) {

                $pair = [$word, $revWord];

                sort($pair);

                $pairString = implode('', $pair);

                if (!in_array($pairString, $pairedArray)) {
                    $count++;
                    $pairedArray[] = $pairString;
                }
            }

        }

        return $count;

    }
}

$solution = new Solution();

$result = $solution->maximumNumberOfStringPairs(["cd", "ac", "dc", "ca", "zz"]);

print_r($result);
