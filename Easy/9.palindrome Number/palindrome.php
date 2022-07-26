<?php

class Solution{ 


function isPalindrome( $x) {

    $checkNo =$x;
    $reverseno=0;

    while(floor($checkNo) && $checkNo >0){

        $m =$checkNo %10;
        $reverseno = $reverseno * 10 + $m;
        $checkNo =$checkNo /10;

    }
    if ($reverseno == $x ){
        return 1;
    }
    else{
        return 0;
    }


}

}

$ans = new Solution();

echo $ans->isPalindrome(1441);


?>
