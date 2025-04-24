<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function countCompleteSubarrays($nums)
    {
        $n             = count($nums);
        $totalDistinct = count(array_unique($nums));
        $count         = 0;

        for ($left = 0; $left < $n; $left++) {
            $freq     = [];
            $distinct = 0;

            for ($right = $left; $right < $n; $right++) {
                $val = $nums[$right];

                if (! isset($freq[$val])) {
                    $freq[$val] = 0;
                }

                if ($freq[$val] == 0) {
                    $distinct++;
                }

                $freq[$val]++;

                if ($distinct == $totalDistinct) {
                    $count++;
                }
            }
        }

        return $count;
    }
}

$solution = new Solution();

$nums     = [1, 2, 2, 1, 2];

$result  = $solution->countCompleteSubarrays($nums);

echo "The number of complete subarrays is: " . $result . "\n";
