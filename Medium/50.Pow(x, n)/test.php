<?php
class Solution
{
    function myPow($x, $n) {
        $memo = [];
    
        return powHelper($x, $n, $memo);
    }
    
    function powHelper($x, $n, &$memo) {
        if ($n == 0) {
            return 1;
        }
    
        if ($n < 0) {
            $x = 1 / $x;
            $n = -$n;
        }
    
        if (isset($memo[$n])) {
            return $memo[$n];
        }
    
        $result = ($n % 2 == 0) ? powHelper($x * $x, $n / 2, $memo) : $x * powHelper($x * $x, floor($n / 2), $memo);
    
        $memo[$n] = $result;
    
        return $result;
    }
    
}

$solution = new Solution();

$result = $solution->myPow(1.0000000000001
    , -2147483648);

echo $result;
