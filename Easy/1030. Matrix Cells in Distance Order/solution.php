<?php
class Solution
{
    /**
     * @param Integer $rows
     * @param Integer $cols
     * @param Integer $rCenter
     * @param Integer $cCenter
     * @return Integer[][]
     */
    public function allCellsDistOrder($rows, $cols, $rCenter, $cCenter)
    {
        $cells = [];

        for ($r = 0; $r < $rows; $r++) {
            for ($c = 0; $c < $cols; $c++) {
                $distance = abs($r - $rCenter) + abs(num: $c - $cCenter);
                $cells[] = [$r, $c, $distance]; 
            }
        }

        usort($cells, function ($a, $b) {
            return $a[2] - $b[2]; // Compare by distance
        });

        return array_map(function ($cell) {
            return [$cell[0], $cell[1]]; // Only return row and column
        }, $cells);
    }

}
