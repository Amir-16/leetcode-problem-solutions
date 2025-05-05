<?php
class Solution
{
    /**
     * @param String $num
     * @return String
     */
    public function removeTrailingZeros($num)
    {
        return rtrim($num, '0');
    }
}
