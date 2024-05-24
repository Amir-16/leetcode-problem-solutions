<?php

class Solution
{
    //  @param String $word
    //  @return Boolean
    public function detectCapitalUse($word)
    {

        $value = strlen($word);
        //echo $value;

        if ($value == 1) {
            return true;
        } else if ($value > 1) {

            if (ctype_upper($word)) {
                return true;
            } else {

                return false;
            }
        } else {
            for ($i = 1; $i < $value; $i++) {
                if ($word[$i] == $word[1]) {
                    return true;
                } else {
                    return false;
                }
            }
        }

    }
}

$solution = new Solution();
$solution->detectCapitalUse("FlaG");
