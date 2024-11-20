<?php
class Solution
{
    /**
     * @param Integer[] $code
     * @param Integer $k
     * @return Integer[]
     */
    public function decrypt($code, $k)
    {
        $n = count($code);

        $result = array_fill(0, $n, 0);

        if ($k === 0) {
            return $result;
        }

        for ($i = 0; $i < $n; $i++) {

            $sum = 0;

            if ($k > 0) {
                for ($j = 1; $j <= $k; $j++) {
                    $sum += $code[($i + $j) % $n];
                }
            } else {
                for ($j = 1; $j <= abs($k); $j++) {
                    $sum += $code[($i - $j + $n) % $n];
                }
            }
            $result[$i] = $sum;
        }
        return $result;
    }
}

$solution = new Solution();

$code = [5, 7, 1, 4];

$k = 3;

$result = $solution->decrypt($code, $k);

print_r($result);
