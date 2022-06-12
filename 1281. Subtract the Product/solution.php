<?php

class Solution
{

<<<<<<< HEAD
=======
  
    public $n;

>>>>>>> 4fe4caa316ec9b95008b4a5713d6e3b97ef40899
    function subtractProductAndSum(int $n)
    {
        
            $product=1;
            $sum =0;
<<<<<<< HEAD
        while($n >0){
           
            $mod = $n % 10;
            $product *= $mod;
            $sum += $mod;
            $n /= 10;
=======

            $nocrt = $n ."";

            $value = strlen($nocrt);
>>>>>>> 4fe4caa316ec9b95008b4a5713d6e3b97ef40899

            for($i= 0; $i<$value;$i++){

<<<<<<< HEAD
=======
                 $product = $product * $nocrt[$i];
                 $sum =$sum + $nocrt[$i];
            }
            

            echo $product - $sum;
      
>>>>>>> 4fe4caa316ec9b95008b4a5713d6e3b97ef40899
    }

}


$result = new Solution();
$result->subtractProductAndSum(4421);



?>