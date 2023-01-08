<?php

class Solution
{

    //public $i;
    public $j;
    public $mid;
    public function maximumCount(array $nums)
    {

        $length = count($nums);
         $j =$length -1;
            while($i <= $j){
            $mid = $i + ($j - 1) / 2;

            if($nums[$mid]< 0){
                $i = $mid + 1;

            }
            else if($nums[$mid] >0){
                $j = $mid - 1;
            }
            echo max($i, $length - 1);
        
            }
    }
}
$solution = new Solution();
$solution->maximumCount(([-2, -1, -1, 1, 2, 3]));
