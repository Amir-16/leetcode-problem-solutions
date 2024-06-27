<?php
class Solution
{
    public function findRelativeRanks($score)
    {

        $intialScore = array_flip($score);

        krsort($intialScore);

        $medalRanks =
            ["Gold Medal",
            "Silver Medal",
            "Bronze Medal"];

        foreach (array_values($intialScore) as $index => $scorer) {
            // Determine the rank
            $score[$scorer] = array_shift($medalRanks) ?? strval($index + 1);
        }
        return $score;

    }
}

// Example usage
$solution = new Solution();

$score = [10, 3, 8, 9, 4];

print_r($solution->findRelativeRanks($score));
