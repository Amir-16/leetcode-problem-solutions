<?php

class Solution
{


    public $x;
    public $y;
    
    function nearestValidPoint(int $x, int $y,  array $points)
    {
         $index = -1;

         $distance = PHP_INT_MAX;

         $n =sizeof($points);

         for($i=0; $i<$n; $i++ ){

            if($x == $points[$i][0] || $y ==$points[$i][1]){

                $current_dis =abs( $x - $points[$i][0]) + abs($y - $points[$i][1]);
                
                if($current_dis < $distance){
                    $distance = $current_dis;
                    $index = $i;
                }

            }
            
         }

         echo $index;
    }

}



$solution = new Solution();

$solution->nearestValidPoint(3, 4, [[2, 3]]);

?>