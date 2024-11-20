<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function pivotIndex($nums)
    {
        $product = array_sum($nums);

        $leftsum = 0;

        foreach ($nums as $index => $number) {
            if ($leftsum == ($product - $leftsum - $number)) {
                return $index;
            }
            $leftsum += $number;
        }

        return -1;
    }
}
