<?php
class Solution
{
    // /**
    //  * @param Integer[] $arr
    //  * @return Boolean
    //  */
    public function threeConsecutiveOdds($arr)
    {
        // Check if there are three consecutive odd numbers in the array
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 != 0 && $arr[$i + 1] % 2 != 0 && $arr[$i + 2] % 2 != 0) {
                return true;
            }
        }

        return false;
    }
}

$solution = new Solution();

$data = [1, 2, 34, 3, 4, 5, 7, 23, 12];

$result = $solution->threeConsecutiveOdds($data);

//print_r($result);

//echo $result ? "true" : "false";
