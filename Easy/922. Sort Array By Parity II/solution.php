<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function sortArrayByParityII($nums)
    {
        $evenArr = [];

        $oddArr = [];

        foreach ($nums as $num) {
            if ($num % 2 == 0) {
                array_push($evenArr, $num);
            } else {
                array_push($oddArr, $num);
            }
        }

        $combinedArray = [];
        $maxLength = max(count($evenArr), count($oddArr));

        for ($i = 0; $i < $maxLength; $i++) {
            if (isset($evenArr[$i])) {
                array_push($combinedArray, $evenArr[$i]);
            }
            if (isset($oddArr[$i])) {
                array_push($combinedArray, $oddArr[$i]);
            }
        }

        return $combinedArray;
    }
}

$solution = new Solution();

$nums = [4, 2, 5, 7];

$result = $solution->sortArrayByParityII($nums);

print_r($result);
