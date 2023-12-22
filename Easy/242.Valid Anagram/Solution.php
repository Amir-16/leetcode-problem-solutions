<?php

class Solution
{
   public  function isAnagram($s, $t)
    {
        if (strlen($s) != strlen($t)) {
            return false;
        }

        $array1 = count_chars(strtolower($s));
        $array2 = count_chars(strtolower($t));

        //match check for invalid characters
        if (!empty(array_diff_assoc($array2, $array1))) {
            return false;
        }
        if (!empty(array_diff_assoc($array1, $array2))) {
            return false;
        }

        return true;
    }

}

?>