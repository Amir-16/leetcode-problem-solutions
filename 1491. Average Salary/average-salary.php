<?php


class Solution{

    public $mx;
    public $mn;
    function average(array $salary){
         $sum =0;
        for($i=0;$i<sizeof($salary);$i++){
           // array_push($salary,$i);
           $sum = $sum + $salary[$i];
            $value =$salary[$i];
           $mx =max($value);
         
       }
      // echo $sum;
       echo $mx;

           // $sum =array_sum($salary);
        
    }

}

 
$ans = new Solution();
$ans->average([10,20,40,50,70]);