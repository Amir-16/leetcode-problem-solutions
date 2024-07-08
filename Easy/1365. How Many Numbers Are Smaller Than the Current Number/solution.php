<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function smallerNumbersThanCurrent($nums)
    {
        $count = count($nums);
        $result = [];

        foreach ($nums as $number) {
            $smallerNumCount = 0;

            for ($i = 0; $i < $count; $i++) {
                if ($nums[$i] < $number) {
                    $smallerNumCount++;
                }
            }
            $result[] = $smallerNumCount;
        }
        return $result;

    }
}

$nums = [8, 1, 2, 2, 3];

$solution = new Solution();

$result = $solution->smallerNumbersThanCurrent($nums);

print_r($result);
