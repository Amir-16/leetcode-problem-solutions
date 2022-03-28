<?php


class Solution{

    public $mx;
    public $mn;
    public $n ;
    function average(array $salary){
         $sum =0;
        $n =sizeof($salary);

        for($i=0;$i<$n;$i++){
           // array_push($salary,$i);
           $sum = $sum + $salary[$i];
            $value[] =$salary[$i];
           $mx =max($value);
           $mn = min($value);
         
       }
     // echo $sum;

      $result = $sum -($mx + $mn) /(($n-2)*1.0);

      echo $result;

           // $sum =array_sum($salary);
        
    }

}
 
$ans = new Solution();
$ans->average([10,20,40,50,70]);