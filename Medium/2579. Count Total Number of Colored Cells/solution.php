<?php
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function coloredCells($n)
    {
        return 1 + 2 * $n * ($n - 1);
    }
}
