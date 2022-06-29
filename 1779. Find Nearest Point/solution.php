<?php

class Solution
{

    /**
     * @param Integer $x
     * @param Integer $y
     * @param Integer[][] $points
     * @return Integer
     */
    function nearestValidPointiny(int $x, int $y,  array $points)
    {
         $index = -1;

         $distance =PHP_INT_MAX;

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

$solution->nearestValidPointiny(3, 4, [[2, 4]]);

?>