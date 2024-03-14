<?php

class Solution
{
    public function strStr($haystack, $needle)
    {

        $position = strpos($haystack, $needle);

        if ($position !== false) {
            return $position;
        } else {
            return -1;
        }

    }
}
