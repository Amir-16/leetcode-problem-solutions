<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function targetIndices($nums, $target)
    {
        $indices = [];

        sort($nums);

        foreach($nums as $index => $number)
        {
            if($number === $target){
                $indices[] = $index;
            }
        }
        return $indices;

    }
}

$solution = new Solution();

$result = $solution->targetIndices([1, 2, 5, 2, 3], 2);

print_r($result);
