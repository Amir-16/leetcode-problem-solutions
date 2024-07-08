<?php
class Solution
{
    public function islandPerimeter($grid)
    {
        $rows = count($grid);
        $cols = count($grid[0]);

        $perimeter = 0;

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                
                if ($grid[$i][$j] == 1) {

                    if ($i == 0 || $grid[$i - 1][$j] == 0) {
                        $perimeter++;
                    }

                    if ($i == $rows - 1 || $grid[$i + 1][$j] == 0) {
                        $perimeter++;
                    }

                    if ($j == 0 || $grid[$i][$j - 1] == 0) {
                        $perimeter++;
                    }

                    if ($j == $cols - 1 || $grid[$i][$j + 1] == 0) {
                        $perimeter++;
                    }

                }
            }
        }
        return $perimeter;
    }
}

$grid = [
    [0, 1, 0, 0],
    [1, 1, 1, 0],
    [0, 1, 0, 0],
    [1, 1, 0, 0],
];

$solution = new Solution;

$perimeter = $solution->islandPerimeter($grid);

// echo "Perimeter: $perimeter\n";

print_r($perimeter);

//islandPerimeter($grid); // Output: 16
