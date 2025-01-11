<?php

class Solution
{
    public function wordSubsets($words1, $words2)
    {
                                                                                                                                                                                                          
        $maxFreq = array_fill(0, 26, 0);
        foreach ($words2 as $word) {
            $freq = $this->getCharFrequency($word);
            for ($i = 0; $i < 26; $i++) {
                $maxFreq[$i] = max($maxFreq[$i], $freq[$i]);
            }
        }

        $result = [];
        foreach ($words1 as $word) {
            $freq = $this->getCharFrequency($word);
            $isUniversal = true;
            for ($i = 0; $i < 26; $i++) {
                if ($freq[$i] < $maxFreq[$i]) {
                    $isUniversal = false;
                    break;
                }
            }
            if ($isUniversal) {
                $result[] = $word;
            }
        }

        return $result;
    }

    private function getCharFrequency($word)
    {
        $freq = array_fill(0, 26, 0);
        $base = ord('a'); // Reference for 'a'
        for ($i = 0; $i < strlen($word); $i++) {
            $freq[ord($word[$i]) - $base]++;
        }
        return $freq;
    }

}

$solution = new Solution();

$words1 = ["amazon", "apple", "facebook", "google", "leetcode"];

$words2 = ["e", "o"];

$result = $solution->wordSubsets($words1, $words2);

print_r($result);
