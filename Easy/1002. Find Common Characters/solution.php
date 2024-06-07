<?php
class Solution
{
    /**
     * @param String[] $words
     * @return String[]
     */
    public function commonChars($words)
    {
        $common_counts = array_fill(0, 26, PHP_INT_MAX);

        foreach ($words as $word) {
            $current_counts = array_fill(0, 26, 0);

            for ($i = 0; $i < strlen($word); $i++) {
                $current_counts[ord($word[$i]) - ord('a')]++;
            }

            for ($i = 0; $i < 26; $i++) {
                $common_counts[$i] = min($common_counts[$i], $current_counts[$i]);
            }
        }

        $result = [];
        for ($i = 0; $i < 26; $i++) {
            while ($common_counts[$i]-- > 0) {
                $result[] = chr($i + ord('a'));
            }
        }

        return $result;
    }
}

$words = ["bella", "label", "roller"];

$solution = new Solution();

$result = $solution->commonChars($words);

print_r($result);
