<?php
class Solution
{

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    public function islandPerimeter($grid)
    {
        $rows = count($grid);
        $cols = count($grid[0]);

        return $cols;
        $perimeter = 0;

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                if ($grid[$i][$j] == 1) {
                    // Count top edge
                    if ($i == 0 || $grid[$i - 1][$j] == 0) {
                        $perimeter++;
                    }

                    // Count bottom edge
                    if ($i == $rows - 1 || $grid[$i + 1][$j] == 0) {
                        $perimeter++;
                    }

                    // Count left edge
                    if ($j == 0 || $grid[$i][$j - 1] == 0) {
                        $perimeter++;
                    }

                    // Count right edge
                    if ($j == $cols - 1 || $grid[$i][$j + 1] == 0) {
                        $perimeter++;
                    }
                }
            }
        }

        return $perimeter;
    }

}

// Example usage:
$grid = [
    [0, 1, 0, 0],
    [1, 1, 1, 0],
    [0, 1, 0, 0],
    [1, 1, 0, 0],
];

$solution = new Solution;

$perimeter = $solution->islandPerimeter($grid);

echo "Perimeter: $perimeter\n";

//islandPerimeter($grid); // Output: 16
