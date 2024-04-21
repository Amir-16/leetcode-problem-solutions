<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function permute($nums)
    {
        $results = [];

        $this->backtrack($nums, [], $results);
        return $results;
    }

    private function backtrack($nums, $currentPermutation, &$results)
    {
        if (count($currentPermutation) == count($nums)) {
            $results[] = $currentPermutation;
            return;
        }

        for ($i = 0; $i < count($nums); $i++) {
            if (!in_array($nums[$i], $currentPermutation)) {
                $currentPermutation[] = $nums[$i];
                $this->backtrack($nums, $currentPermutation, $results);
                array_pop($currentPermutation);
            }
        }
    }
}

// the below code fragment can be found in:

$solution = new Solution();

$result = $solution->permute([1, 2, 3]);

print_r($result);
