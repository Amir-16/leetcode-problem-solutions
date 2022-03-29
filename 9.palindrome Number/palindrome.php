<?php

class Solution{



function isPalindrome($input) {
    $middle = strlen($input) / 2;
    $firstHalf = substr($input, 0, floor($middle));
    $secondHalf = substr($input, ceil($middle));
    return $firstHalf == strrev($secondHalf);
}

//echo palindrome("racecar") ? "Palindrome" : "Not a palindrome";

}

$result = new Solution();
echo $result->isPalindrome(-121) ? "Palindrome" : "Not a palindrome";

?>