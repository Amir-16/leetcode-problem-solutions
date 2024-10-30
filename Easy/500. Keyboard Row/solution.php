<?php
class Solution
{
    /**
     * @param String[] $words
     * @return String[]
     */
    public function findWords($words)
    {
        $row1 = '/^[qwertyuiopQWERTYUIOP]+$/';
        $row2 = '/^[asdfghjklASDFGHJKL]+$/';
        $row3 = '/^[zxcvbnmZXCVBNM]+$/';

        $result = [];

        foreach ($words as $word) {
            if (preg_match($row1, $word) || preg_match($row2, $word) || preg_match($row3, $word)) {
                $result[] = $word;
            }
        }

        return $result;
    }
}
