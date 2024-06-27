<?php
class Solution
{
    /**
     * @param String $s
     * @param String[] $words
     * @return Boolean
     */
    public function isPrefixString($s, $words)
    {
        $concateWord = "";
        foreach ($words as $word) {

            $concateWord .= $word;

            if ($concateWord === $s) {
                return true;
            }
            if (strlen($concateWord) > strlen(($s))) {
                break;
            }
        }
        return false;
    }
}

$solution = new Solution();

$s = "iloveleetcode";

$words = ["i", "love", "leetcode", "apples"];
$result = $solution->isPrefixString($s, $words);

print_r($result);
