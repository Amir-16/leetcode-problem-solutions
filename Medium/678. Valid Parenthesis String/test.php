<?php

function checkValidString($s) {
    $low = 0; // lowest possible count of open parentheses
    $high = 0; // highest possible count of open parentheses
    
    // Traverse the string
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == '(') {
            $low++; // Increment low
            $high++; // Increment high
        } elseif ($s[$i] == ')') {
            if ($low > 0) {
                $low--; // Decrement low
            }
            $high--; // Decrement high
        } else { // '*' encountered
            if ($low > 0) {
                $low--; // Treat '*' as ')'
            }
            $high++; // Treat '*' as '('
        }
        
        // If high goes negative, return false (imbalance of ')')
        if ($high < 0) {
            return false;
        }
    }
    
    // If low is 0 or greater, all '(' are balanced
    return $low == 0;
}

// Example usage
$s = "(*))";
echo checkValidString($s) ? "Valid" : "Invalid"; // Output: Valid
