<?php
class Solution
{
    public function largestLocal(array $grid)
    {
        $localMaxima = [];

        $rows = count($grid);
        $cols = count($grid[0]);

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $current = $grid[$i][$j];
                $isLocalMaxima = true;

                for ($di = -1; $di <= 1; $di++) {
                    for ($dj = -1; $dj <= 1; $dj++) {
                        $ni = $i + $di;
                        $nj = $j + $dj;

                        if ($ni >= 0 && $ni < $rows && $nj >= 0 && $nj < $cols) {
                            if ($grid[$ni][$nj] > $current) {
                                $isLocalMaxima = false;
                                break 2;
                            }
                        }
                    }
                }

                // If it's a local maximum, store its coordinates
                if ($isLocalMaxima) {
                    $localMaxima[] = $current;
                }
            }
        }

        return $localMaxima;
    }
}

$solution = new Solution();
$grid = [
    [9, 9, 8, 1],
    [5, 6, 2, 6],
    [8, 2, 6, 4],
    [6, 2, 2, 2],
];

// Example usage:
$result = $solution->largestLocal($grid);

print_r($result);
