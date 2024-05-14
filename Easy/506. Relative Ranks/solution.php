<?php
class Solution
{
    public function findRelativeRanks($score)
    {
        // Sort the scores in descending order
        arsort($score);

        $medalRanks = [
            "Gold Medal",
            "Silver Medal",
            "Bronze Medal",
        ];

        $result = [];

        foreach ($score as $index => $scorer) {
            // Determine the rank
            if ($index < 3) {
                $rank = $medalRanks[$index];
            } else {
                $rank = strval($index + 1);
            }

            $result[] = $rank;
        }
        return $result;
    }
}

// Example usage
$solution = new Solution();
$score = [10, 3, 8, 9, 4];
print_r($solution->findRelativeRanks($score));
