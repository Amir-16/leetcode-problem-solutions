<?php

class Solution {

    function pivotInteger($n) {

        if ($n == 1) {
            return 1;
        }

        $total = ( $n *( $n + 1 ))/ 2;

        $leftSum = 0;

        for($i = 1 ; $i <= $n ; $i++) {

            if ($leftSum == $total - $leftSum - $i) {
                return $i ;
            }
            $leftSum += $i;
        }
        return -1;

    }
}


$solution = new Solution();

echo $solution->pivotInteger(4);