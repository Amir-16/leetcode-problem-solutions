<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function specialArray($nums)
    {
        rsort($nums);
        $n = count($nums);

        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] >= $i + 1 && ($i == $n - 1 || $nums[$i + 1] < $i + 1)) {
                return $i + 1;
            }
        }

        return -1;
    }
}

$solution = new Solution();

$result = $solution->specialArray([0, 4, 3, 0, 4]);

print_r($result);
