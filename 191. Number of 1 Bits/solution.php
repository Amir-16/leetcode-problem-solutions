<?php


class Solution
{
 

    function hammingWeightint(int $n)
    {

          $pivot =1;
         $sum =0;
    
        for($i =0; $i<32;$i++){

             $check = $pivot << $i;

             if(($n & $check) == $check){
                 $sum++;
             }

             echo $sum;
             
        }

    }
}


$solution = new Solution();

$solution->hammingWeightint(00000000000000000000000000001011);



?>