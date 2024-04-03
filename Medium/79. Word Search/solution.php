<?php
class Solution {

    function exist($board, $word) {
        $rows = count($board);
        $cols = count($board[0]);
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                if ($this->dfs($board, $word, $i, $j, 0)) {
                    return true;
                }
            }
        }
        return false;
    }
    
    private function dfs(&$board, $word, $i, $j, $wordIndex) {
        if ($wordIndex == strlen($word)) {
            return true; // Found the word
        }
        
        if ($i < 0 || $j < 0 || $i >= count($board) || $j >= count($board[0])) {
            return false; // Out of bounds
        }
        
        if ($board[$i][$j] != $word[$wordIndex]) {
            return false; // Current cell does not match the letter
        }
        
        // To avoid using the same cell twice, temporarily change its value
        $temp = $board[$i][$j];
        $board[$i][$j] = '#'; // Mark as visited
        
        // Explore all possible directions
        $exist = $this->dfs($board, $word, $i+1, $j, $wordIndex+1) ||
                 $this->dfs($board, $word, $i-1, $j, $wordIndex+1) ||
                 $this->dfs($board, $word, $i, $j+1, $wordIndex+1) ||
                 $this->dfs($board, $word, $i, $j-1, $wordIndex+1);
                 
        $board[$i][$j] = $temp; // Restore the original value
        
        return $exist;
    }
}
