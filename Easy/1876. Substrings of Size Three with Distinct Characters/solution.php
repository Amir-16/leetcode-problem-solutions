<?php
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function countGoodSubstrings($s)
    {
        $count = 0;

        for ($i = 0; $i < strlen($s) - 2; $i++) {

            $subString = substr($s, $i, 3);

            if (count(array_unique(str_split($subString))) === 3) {
                $count++;
            }
        }
        return $count;
    }
}
