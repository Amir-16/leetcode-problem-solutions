<?php

class Solution
{

    public $nums;

    function arraySign(array $nums)
    {

        $product = 0;
        $length = count($nums);

        // echo $length;

        $product = array_product($nums);

        // echo $product.PHP_EOL;

        if ($product > 0) {

            return 1;
        } else if ($product < 0) {

            return -1;
        } else {

            return 0;
        }

     

    }
}


$solution = new Solution();
$solution->arraySign([-1, 1, -1, 1, -1]);


?>