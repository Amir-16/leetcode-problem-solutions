<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function sortArrayByParity($nums)
    {
        $even = [];
        $odd = [];

        foreach ($nums as $number) {
            if ($number % 2 == 0) {
                array_push($even, $number);
            } else {
                array_push($odd, $number);
            }
        }

        return array_merge($even, $odd);
    }
}

$solution = new Solution();

$nums = [3, 1, 2, 4];

$result = $solution->sortArrayByParity($nums);

print_r($result);
