<?php
class Solution
{
    public function isAcronym($words, $s)
    {
        if (strlen($s) !== count($words)) {
            return false;
        }

        foreach ($words as $key => $word) {
            if ($word[0] !== $s[$key]) {
                return false;
            }
        }
        return true;
    }
}

$solution = new Solution();

$result = $solution->isAcronym(["afqcpzsx", "icenu"]
    , "yi");

print_r($result);
