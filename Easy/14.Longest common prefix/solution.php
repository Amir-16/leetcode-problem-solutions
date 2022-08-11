<?php

class Solution{


    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $first = array_shift($strs);
        $first = str_split($first);
        $length = count($first);
        $prefix = '';
        for ($i = 0; $i <= $length; $i++) {
            foreach ($strs as $str) {
                if (!isset($str[$i])) {
                    break 2;
                }
                if ($str[$i] != $first[$i]) {
                    break 2;
                }
            }

            $prefix .= $first[$i];
        }
        echo $prefix;
    }

}


$solution = new Solution();

$solution->longestCommonPrefix(["flower", "flow", "flight"]);