<?php
class Solution
{
    /**
     * @param String $s
     * @return String
     */
    public function makeFancyString($s)
    {
        $result = '';

        $n = strlen($s);

        for ($i = 0; $i < $n; $i++) {

            $length = strlen($result);

            if ($length < 2 || !($result[$length - 1] == $s[$i] && $result[$length - 2] == $s[$i])) {
                $result .= $s[$i];
            }

            return $result;
        }
    }
}

$s = 'leeetcode';

$solution = new Solution();

$result = $solution->makeFancyString($s);

echo $result;
