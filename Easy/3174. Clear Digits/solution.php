<?php
class Solution
{
    /**
     * @param String $s
     * @return String
     */
    public function clearDigits($s)
    {
        $stack = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (ctype_digit($s[$i])) {
                if (! empty($stack)) {
                    array_pop($stack);
                }
            } else {
                $stack[] = $s[$i];
            }
        }
        return implode("", $stack);
    }
}

$solution = new Solution();

echo $solution->clearDigits('cb34');
