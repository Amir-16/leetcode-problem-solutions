<?php
class Solution
{
    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    public function rotateString($s, $goal)
    {
        $str1 = strlen($s);

        $str2 = strlen($goal);

        if ($str1 != $str2) {
            return false;
        }

        $concat = $s . $s;

        return strpos($concat, $goal) !== false;
    }
}

$solution = new Solution();

$s = "abcde";

$goal = "cdeab";

echo $solution->rotateString($s, $goal);
