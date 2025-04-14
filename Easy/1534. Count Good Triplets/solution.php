<?php
class Solution
{
    /**
     * @param Integer[] $arr
     * @param Integer $a
     * @param Integer $b
     * @param Integer $c
     * @return Integer
     */
    public function countGoodTriplets($arr, $a, $b, $c)
    {
        $count = 0;
        $n     = count($arr);
        for ($i = 0; $i < $n - 2; $i++) {
            for ($j = $i + 1; $j < $n - 1; $j++) {

                if (abs($arr[$i] - $arr[$j]) > $a) {
                    continue;
                }

                for ($k = $j + 1; $k < $n; $k++) {

                    if (
                        abs($arr[$j] - $arr[$k]) <= $b && abs(($arr[$i] - $arr[$k])) <= $c) {
                        $count++;
                    }
                }
            }
        }
        return $count;
    }
}

$solution = new Solution();

$arr = [3, 0, 1, 1, 9, 7];

$a = 7;

$b      = 2;
$c      = 3;
$result = $solution->countGoodTriplets($arr, $a, $b, $c);

echo "The number of good triplets is: " . $result . "\n"; // Output: 4
