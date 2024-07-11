<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function numIdenticalPairs($nums)
    {
        $count = count($nums);
        $countPairs = 0;

        for ($i = 0; $i < $count; $i++) {

            for ($j = $i + 1; $j < $count; $j++) {
                if ($nums[$i] == $nums[$j]) {
                    $countPairs++;
                }
            }
        }
        return $countPairs;
    }
}

$nums = [1, 2, 3, 1, 1, 3];

$solution = new Solution();

$result = $solution->numIdenticalPairs($nums);

echo $result;
