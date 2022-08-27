<?php

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {

        $checkarray = array_shift($strs);
        $str_match = str_split($checkarray);

        $length = count($str_match);

        $prefix = '';

        for($i =0; $i< $length; $i++){

            foreach($strs as $str){
                if(!isset($str[$i])){
                    break 2;
                }
                if($strs as $str){

                }
            }
            
        }


        print_r($str_match);
    }
}


$solution = new Solution;

$solution->longestCommonPrefix(["flower", "flow", "flight"]);