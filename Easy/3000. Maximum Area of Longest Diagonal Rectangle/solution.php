<?php
class Solution
{
    /**
     * @param Integer[][] $dimensions
     * @return Integer
     */
    public function areaOfMaxDiagonal($dimensions)
    {
        $maxDiagonal = 0;
        $maxArea     = 0;

        foreach ($dimensions as $dimension) {
            $w        = $dimension[0];
            $h        = $dimension[1];
            $diagonal = sqrt($w * $w + $h * $h);
            $area     = $w * $h;

            if ($diagonal > $maxDiagonal) {
                $maxDiagonal = $diagonal;
                $maxArea     = $area;
            } elseif ($diagonal == $maxDiagonal && $area > $maxArea) {
                $maxArea = $area;
            }
        }
        return $maxArea;
    }
}

$solution = new Solution();

$dimensions = [[4, 5], [6, 7], [8, 9]];
$result     = $solution->areaOfMaxDiagonal($dimensions);
echo "Maximum area of longest diagonal rectangle: " . $result;
