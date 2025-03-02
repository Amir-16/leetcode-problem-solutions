<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function applyOperations($nums)
    {
        $n = count($nums);

        for ($i = 0; $i < $n - 1; $i++) {
            if ($nums[$i] == $nums[$i + 1] && $nums[$i] != 0) {
                $nums[$i] *= 2;
                $nums[$i + 1] = 0;
            }
        }

        $result    = [];
        $zeroCount = 0;

        foreach ($nums as $num) {
            if ($num != 0) {
                $result[] = $num;
            } else {
                $zeroCount++;
            }
        }

        while ($zeroCount--) {
            $result[] = 0;
        }

        return $result;
    }
}

$solution = new Solution();

$nums = [1, 2, 2, 1, 1, 0];

$result = $solution->applyOperations($nums);

print_r($result);
