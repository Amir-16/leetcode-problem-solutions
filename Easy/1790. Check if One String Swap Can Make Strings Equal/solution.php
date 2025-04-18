<?php
class Solution
{
    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    public function areAlmostEqual($s1, $s2)
    {
        if ($s1 === $s2) {
            return true;
        }

        $diff = [];

        // Find positions where characters differ
        for ($i = 0; $i < strlen($s1); $i++) {
            if ($s1[$i] !== $s2[$i]) {
                $diff[] = $i;
            }
        }

        // If there are exactly two differences, check if swapping them fixes the strings
        return count($diff) === 2 &&
            $s1[$diff[0]] === $s2[$diff[1]] &&
            $s1[$diff[1]] === $s2[$diff[0]];
    }
}

$solution = new Solution();

$s1 = "abcd";

$s2 = "dcba";

$result = $solution->areAlmostEqual($s1, $s2); // Output: true

print_r($result);
