<?php
class Solution {

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function countOdds(int $low, int $high) {

        $data[] =range($low,$high);

        $n =sizeof($data);

        echo $n;
        
    }
}


$ans = new Solution();
$ans->countOdds(5,10);


?>