<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function check($nums)
    {

        $count       = count($nums);
        $countBreaks = 0;

        for ($i = 0; $i < $count; $i++) {
            if ($nums[$i] > $nums[($i + 1) % $count]) { // Circular check
                $countBreaks++;
            }
        }

        return $countBreaks <= 1;
    }
}

$solution = new Solution();

$nums = [1, 2, 3, 4, 5, 6];

echo $solution->check($nums); // Output: true
