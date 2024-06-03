<?php
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    public function scoreOfString($s)
    {
        $score = 0;
        $length = strlen($s);

        for ($i = 0; $i < $length - 1; $i++) {
            //    $score += abs(ord($s[$i]) - ord($s[$i + 1]));

            $score += abs(ord($s[$i]) - ord($s[$i + 1]));
        }

        return $score;

    }
}

$solution = new Solution;

echo $solution->scoreOfString('hello');
