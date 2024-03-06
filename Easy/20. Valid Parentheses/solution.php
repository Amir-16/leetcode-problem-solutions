<?php
class Solution {
    function isValid($s) {
        $stack = [];

        $map = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];
        
        for($i = 0; $i < strlen($s); $i++) {
            
            $checkValue = $s[$i];

            if(array_key_exists($checkValue, $map)) {

                $elements = empty($stack) ? $stack : array_pop($stack);

                if($elements != $map[$checkValue]) {
                    return false;
                }
            } else {
                array_push($stack, $checkValue);
            }
        
        }
        return empty($stack)? true : false;
       
      }

    }

    $s = "()[]{}";
    $sol = new Solution();
    echo $sol->isValid($s);