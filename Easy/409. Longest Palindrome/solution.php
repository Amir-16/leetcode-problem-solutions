<?php
class Solution {
    
    function longestPalindrome(string $s) {
        
        $charCount = [];

        if (strlen($s) <= 1) {
            return  1;
        }

        for ($i = 0; $i < strlen($s); $i++) {
           
            $value = $s[$i];

            if (array_key_exists($value,$charCount)) {
                $charCount[$value] ++;
            } else {
                $charCount[$value] = 1;
            }
        }

        $palindromeMaxLength = 0 ;

        $oddCount = false ;

        foreach($charCount as $item) { 

            if ( $item  % 2  == 0 ) {
                $palindromeMaxLength += $item;
            } else {
                $palindromeMaxLength += $item -1;
                $oddCount = true;
            }
            
        }

        if  ($oddCount) {
            $palindromeMaxLength += 1;
        }

        return $palindromeMaxLength;
    }
    
}

$solution = new Solution();

$result =  $solution->longestPalindrome("ccd");

print_r($result);

