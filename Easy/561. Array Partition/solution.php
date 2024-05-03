<?php
class Solution
{
    // /**
    //  * @param Integer[] $nums
    //  * @return Integer
    //  */
    public function arrayPairSum($nums)
    {

        sort($nums);

        $total = 0;

        $length = count($nums);

        for ($i = 0; $i < $length; $i += 2) {
            $total += $nums[$i];
        }

        return $total;

    }
}

$solution = new Solution();

$result = $solution->arrayPairSum([6, 2, 6, 5, 1, 2]);

//echo $result;

print_r($result);
