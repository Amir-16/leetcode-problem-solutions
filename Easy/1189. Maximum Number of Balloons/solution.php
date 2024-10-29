<?php
class Solution
{
    /**
     * @param String $text
     * @return Integer
     */
    public function maxNumberOfBalloons($text)
    {
        $counts = array_fill_keys(
            ['b', 'a', 'l', 'o', 'n'],
            0);

        foreach (str_split($text) as $char) {
            if (isset($counts[$char])) {
                $counts[$char]++;
            }
        }

        $counts['l'] = floor($counts['l'] / 2);
        $counts['o'] = floor($counts['o'] / 2);
        
        return min($counts);
    }
}

$solution = new Solution();

$text = "loonbalxballpoon";

$result = $solution->maxNumberOfBalloons($text);

print_r($result);
