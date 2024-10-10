<?php
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function minLength($s)
    {
        while (strpos($s, 'AB') !== false || strpos($s, 'CD') !== false) {

            $s = str_replace('AB', '', $s);

            $s = str_replace('CD', '', $s);
        }
        return strlen($s);
    }
}

$solution = new Solution();

echo $solution->minLength('AEDCBAA'); 
