<?php
class Solution
{
        /**
     * @param String $s
     * @param Integer[] $spaces
     * @return String
     */
    public function addSpaces($s, $spaces)
    {
        $result = [];

        $prevIndex = 0;

        foreach ($spaces as $spaceIndex) {

            $result[] = substr($s,$prevIndex, $spaceIndex - $prevIndex);

            $result[] = " ";

            $prevIndex = $spaceIndex;
        }
        
        $result[] = substr($s,$prevIndex);

        return implode("",$result);
    }
}

$s = "LeetcodeHelpsMeLearn";

$spaces = [8,13,15];

$solution = new Solution();

$result = $solution->addSpaces($s, $spaces);

print_r($result);
