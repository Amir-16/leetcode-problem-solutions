<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    public function countPairs($nums, $k)
    {
        $count = 0;
        $n     = count($nums);

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($nums[$i] == $nums[$j] && ($i * $j) % $k == 0) {
                    $count++;
                }
            }
        }
        return $count;
    }
}

$solution = new Solution();
$nums    = [1, 2, 3, 1, 1, 3];
$k       = 2;
$result  = $solution->countPairs($nums, $k);

echo "The number of equal and divisible pairs is: " . $result . "\n"; // Output: 4
