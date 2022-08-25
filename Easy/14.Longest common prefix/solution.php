<?php

class Solution{


    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $first = array_shift($strs);
        $check_match = str_split($first);
        $length = count($check_match);

       // print_r($length);
        $prefix = '';
        for ($i = 0; $i <= $length; $i++) {
            foreach ($strs as $str) {
                if (!isset($str[$i])) {
                    break 2;
                }
                if ($str[$i] != $check_match[$i]) {
                    break 2;
                }
            }

            $prefix .= $check_match[$i];
        }
        echo $prefix;
    }

}


$solution = new Solution();

$solution->longestCommonPrefix(["flower", "flow", "flight"]);