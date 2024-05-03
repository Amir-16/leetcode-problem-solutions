<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxDepth(string $s) {

        $maxDepth = $currentDepth = 0;

        for($i = 0; $i < strlen($s); $i++) {

            if ($s[$i] == '(') {
                $currentDepth++;
                $maxDepth = max($maxDepth, $currentDepth);
            } elseif ($s[$i] == ')') {
                $currentDepth --;
            }

        }

        return $maxDepth;
    }
}
