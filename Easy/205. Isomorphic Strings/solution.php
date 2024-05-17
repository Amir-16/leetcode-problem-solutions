<?php

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    public function isIsomorphic($s, $t)
    {
        $map_s = [];
        $map_t = [];

        if (strlen($s) != strlen($t)) {
            return false;
        }
        for ($i = 0; $i < strlen($s); $i++) {
            if (!isset($map_s[$s[$i]])) {
                $map_s[$s[$i]] = $t[$i];
            } else {
                if ($map_s[$s[$i]] != $t[$i]) {
                    return false;
                }
            }
        }

        for ($j = 0; $j < strlen($t); $j++) {
            if (!isset($map_t[$t[$j]])) {
                $map_t[$t[$j]] = $s[$j];
            } else {
                if ($map_t[$t[$j]] != $s[$j]) {
                    return false;
                }
            }
        }
        return true;
    }
}

$solution = new Solution();

$result = $solution->isIsomorphic('badc', 'baba');

print_r($result);
