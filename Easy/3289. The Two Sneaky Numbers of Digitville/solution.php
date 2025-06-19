<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function getSneakyNumbers($nums)
    {
        $sneakyNumbers = [];

        $frequency = [];

        foreach ($nums as $number) {

            if (! isset($frequency[$number])) {
                $frequency[$number] = 0;
            }

            $frequency[$number]++;
        }

        foreach ($frequency as $number => $count) {
            if ($count === 2) {
                $sneakyNumbers[] = $number;
            }
        }
        return $sneakyNumbers;
    }
}

$solution = new Solution();

$nums = [7, 1, 5, 4, 3, 4, 6, 0, 9, 5, 8, 2];

$result = $solution->getSneakyNumbers($nums);

print_r($result);
