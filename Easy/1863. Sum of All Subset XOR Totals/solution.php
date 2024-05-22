<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function subsetXORSum($nums)
    {
        $n = count($nums);
        $totalSum = 0;

        $totalSubsets = 1 << $n;
        for ($i = 0; $i < $totalSubsets; $i++) {
            $subsetXOR = 0;
            for ($j = 0; $j < $n; $j++) {

                if ($i & (1 << $j)) {
                    $subsetXOR ^= $nums[$j];
                }
            }
            $totalSum += $subsetXOR;
        }
        
        return $totalSum;
    }
}

$solution = new Solution();

$result = $solution->subsetXORSum([1, 3]);

print_r($result);
