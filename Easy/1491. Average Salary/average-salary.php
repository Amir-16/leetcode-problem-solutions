<?php


class Solution{

    public $mx;
    public $mn;
    public $n;
    function average(array $salary){
         $sum =0;
         $n=sizeof($salary);
      for($i=0;$i<$n;$i++){
           // array_push($salary,$i);
            $sum = $sum + $salary[$i];
            $value[] =$salary[$i];
            //take max value from array
            $mx = max($value);
            //take min value from array
            $mn =min($value);
         
       }
    //  echo $sum;
     echo $mx.PHP_EOL;
     echo $mn.PHP_EOL;

   $result = ($sum -($mx+ $mn))/(($n- 2)*1.0);
   if ($n >2){
      return  $result;

   }
   else
   {
     return 0;
   }
  
        
 }

}

 
$ans = new Solution();
$ans->average([10000,20000,50000,70000]);   


?>