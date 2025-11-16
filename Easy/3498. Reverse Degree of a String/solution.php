<?php
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function reverseDegree($s)
    {
        $n = strlen($s);

        $sum = 0;

        $oz = ord('z') ;

        for ($i = 0; $i < $n; $i++) {

            $value = $oz - ord($s[$i]) + 1;

            $sum += $value * ($i +1);
        }
        return $sum;
    }
}

// Example usage:
$solution = new Solution();

echo $solution->reverseDegree("abc"); // Output: 5
