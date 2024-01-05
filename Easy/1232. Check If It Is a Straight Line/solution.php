<?php

class Solution
{
    public function checkStraightLine(array $coordinates)
    {
        $n = count($coordinates);

        if ($n <= 2) {
            return true;
        }

        // Calculate vectors and check cross product for collinearity
        $vector1 = [$coordinates[1][0] - $coordinates[0][0], $coordinates[1][1] - $coordinates[0][1]];

        for ($i = 2; $i < $n; $i++) {
            $vector2 = [$coordinates[$i][0] - $coordinates[0][0], $coordinates[$i][1] - $coordinates[0][1]];

            // Calculate cross product
            $crossProduct = ($vector1[0] * $vector2[1] ) - ($vector1[1] * $vector2[0]);

            // If cross product is non-zero, points are not collinear
            if ($crossProduct !== 0) {
                return false;
            }
        }

        return true;
    }
}

$solution = new Solution();

$coordinates = [[0, 0], [0, 1], [0, -1]];

$result = $solution->checkStraightLine($coordinates);

echo $result;

?>