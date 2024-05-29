<?php
class Solution
{
    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    public function truncateSentence($s, $k)
    {
        $words = explode(' ', $s);

        if (count($words) <= $k) {
            return $s;
        }

        $truncatedWords = implode(' ', array_slice($words, 0, $k));

        return $truncatedWords;
    }
}

$solution = new Solution();

$result = $solution->truncateSentence("Hello how are you Contestant", 4);

print_r($result);
