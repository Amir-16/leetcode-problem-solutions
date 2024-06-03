<?php
class Solution
{
    /**
     * @param String $allowed
     * @param String[] $words
     * @return Integer
     */
    public function countConsistentStrings($allowed, $words)
    {
        $consistentStringCount = 0;

        foreach ($words as $word) {
            $icConsistent = true;

            for ($i = 0; $i < strlen($word); $i++) {

                if (strpos($allowed, $word[$i]) === false) {
                    $icConsistent = false;
                    break;
                }
            }

            if ($icConsistent) {
                $consistentStringCount++;
            }
        }

        return $consistentStringCount;
    }
}

$solution = new Solution;

$result = $solution->countConsistentStrings("abc", ["a", "b", "c", "ab", "ac", "bc", "abc"]
);

print_r($result);
