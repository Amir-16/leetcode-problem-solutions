<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @param Integer $multiplier
     * @return Integer[]
     */
    public function getFinalState($nums, $k, $multiplier)
    {
        for ($i = 0; $i < $k; $i++) {

            $minIndex = $this->getMinIndex($nums);

            $nums[$minIndex] *= $multiplier;
        }
        return $nums;
    }

    private function getMinIndex($nums)
    {
        $minIndex = 0;

        foreach ($nums as $index => $minNumber) {

            if ($nums[$index] < $nums[$minIndex]) {
                $minIndex = $index;
            }
        }
        return $minIndex;
    }
}

$nums = [2, 1, 3, 5, 6];

$k = 5;

$multiplier = 2;

$solution = new Solution();

$result = $solution->getFinalState($nums, $k, $multiplier);

print_r($result); // Output: [6, 2, 12, 15, 6]
