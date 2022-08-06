<?php
class Solution
{

   
   // public $nums;
    function largestPerimeter(array $nums)
    {
        rsort($nums);
        $length = count($nums);
        for ($i = 0; $i < $length - 2; $i++) {
            if (($nums[$i]   + $nums[$i + 1] > $nums[$i + 2])
                && ($nums[$i]   + $nums[$i + 2] > $nums[$i + 1])
                && ($nums[$i + 1] + $nums[$i + 2] > $nums[$i])
            ) {
                echo $nums[$i] + $nums[$i + 1] + $nums[$i + 2];
            }
        }
        echo 0;
    }
}

$solution = new Solution;
$solution->largestPerimeter([3, 6, 2, 3]);


?>