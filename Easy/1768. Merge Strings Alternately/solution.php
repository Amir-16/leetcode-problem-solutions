<?php
class Solution
{
    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    public function mergeAlternately($word1, $word2)
    {
        $len1 = strlen($word1);
        $len2 = strlen($word2);
        $result = '';

        $minLen = min($len1, $len2);

        for ($i = 0; $i < $minLen; $i++) {

            $result .= $word1[$i] . $word2[$i];
        }

        if ($len1 > $minLen) {
            $result .= substr($word1,$minLen);
        }

        if($len2 > $minLen) {
            $result .= substr($word2,$minLen);
        }
        return $result;
    }
}

$solution = new Solution();

$word1 = 'ab';
$word2 = 'pqrs';

$result = $solution->mergeAlternately($word1, $word2);

print_r($result);
