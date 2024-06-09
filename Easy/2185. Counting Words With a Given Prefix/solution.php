<?php
class Solution
{
    /**
     * @param String[] $words
     * @param String $pref
     * @return Integer
     */
    public function prefixCount($words, $pref)
    {
        $countPrefix = 0;

        foreach ($words as $word) {
            // if (strpos($word, $pref) === 0) {
            //     $countPrefix++;
            // }
            if (str_starts_with($word, $pref)) {
                $countPrefix++;
            }
        }
        return $countPrefix;
    }
}

$solution = new Solution();

$result = $solution->prefixCount(["pay", "attention", "practice", "attend"], "at");

print_r($result);
