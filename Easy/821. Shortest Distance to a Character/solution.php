<?php
class Solution
{
    /**
     * @param String $s
     * @param String $c
     * @return Integer[]
     */
    public function shortestToChar($s, $c)
    {
        $length = strlen($s);

        $result = [];

        $pos = -$length;
        for ($i = 0; $i < $length; $i++) {
            if ($s[$i] === $c) {
                $pos = $i;
            }
            $result[$i] = $i - $pos;
        }

        $pos = 2 * $length;

        for ($i = $length - 1; $i >= 0; $i--) {
            if ($s[$i] === $c) {
                $pos = $i;
            }
            $result[$i] = min($result[$i], abs($pos - $i));
        }

        return $result;
    }
}

$solution = new Solution();
$s        = "loveleetcode";
$c        = "e";
$output   = $solution->shortestToChar($s, $c);
print_r($output); // Output: [3, 2, 1, 0, 1, 0, 0, 1, 2, 2, 1, 0]
