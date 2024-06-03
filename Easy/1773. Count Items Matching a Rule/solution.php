<?php
class Solution
{
    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    public function countMatches($items, $ruleKey, $ruleValue)
    {
        $matchArray = [
            'type' => 0,
            'color' => 1,
            'name' => 2,
        ];
        $matchCount = 0;

        $matchIndex = $matchArray[$ruleKey];

        foreach ($items as $item) {

            if ($item[$matchIndex] == $ruleValue) {
                $matchCount++;
            }
        }

        return $matchCount;
    }
}

$solution = new Solution();

$result = $solution->countMatches([["phone", "blue", "pixel"],
    ["computer", "silver", "lenovo"],
    ["phone", "gold", "iphone"]], "type", "phone");

print_r($result);
