<?php
class Solution {

    public function getMaximumGold($grid) {
        $maxGold = 0;
        $rows = count($grid);
        $cols = count($grid[0]);
        
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                if ($grid[$i][$j] != 0) {
                    $maxGold = max($maxGold, $this->dfs($grid, $i, $j));
                }
            }
        }
        
        return $maxGold;
    }
    
  private function dfs(&$grid, $row, $col) {
        if ($row < 0 || $col < 0 || $row >= count($grid) || $col >= count($grid[0]) || $grid[$row][$col] == 0) {
            return 0;
        }
        
        $temp = $grid[$row][$col];
        $grid[$row][$col] = 0;
        
        $gold = $temp + max(
            $this->dfs($grid, $row + 1, $col),
            $this->dfs($grid, $row - 1, $col),
            $this->dfs($grid, $row, $col + 1),
            $this->dfs($grid, $row, $col - 1)
        );
        
        $grid[$row][$col] = $temp;
        
        return $gold;
    }
}

$solution = new Solution;

echo $solution->getMaximumGold([[0,6,0],[5,8,7],[0,9,0]]);


