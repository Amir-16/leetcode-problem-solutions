<?php
class Solution
{
    /**
     * @param String[] $words
     * @param String $order
     * @return Boolean
     */
    public function isAlienSorted($words, $order)
    {
        $orderMap = [];
        for ($i = 0; $i < strlen($order); $i++) {
            $orderMap[$order[$i]] = $i;
        }

        for ($i = 0; $i < count($words) - 1; $i++) {
            if (! self::isInOrder($words[$i], $words[$i + 1], $orderMap)) {
                return false;
            }
        }
        return true;
    }

    private static function isInOrder($word1, $word2, $orderMap)
    {
        $len1   = strlen($word1);
        $len2   = strlen($word2);
        $minLen = min($len1, $len2);

        for ($i = 0; $i < $minLen; $i++) {
            if ($orderMap[$word1[$i]] < $orderMap[$word2[$i]]) {
                return true;
            } elseif ($orderMap[$word1[$i]] > $orderMap[$word2[$i]]) {
                return false;
            }
        }
        return $len1 <= $len2;
    }
}

$solution = new Solution();
$words    = ["hello", "leetcode"];
$order    = "hlabcdefgijkmnopqrstuvwxyz";
echo $solution->isAlienSorted($words, $order) ? "true" : "false"; // Output: true
