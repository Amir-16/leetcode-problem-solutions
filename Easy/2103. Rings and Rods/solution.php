<?php
class Solution
{
    /**
     * @param String $rings
     * @return Integer
     */
    public function countPoints($rings)
    {
        $rods = array_fill(0, 10, []);

        for ($i = 0; $i < strlen($rings); $i += 2) {

            $color = $rings[$i];

            $rod = intval($rings[$i + 1]);

            if (!in_array($color, haystack: $rods[$rod])) {
                $rods[$rod][] = $color;
            }
        }

        $count = 0;

        foreach ($rods as $rod) {
            if (in_array('R', $rod) && in_array('G', $rod) && in_array('B', $rod)) {
                $count++;
            }
        }

        return $count;
    }
}

$rings = "B0B0R8R8R";

$solution = new Solution();

echo $solution->countPoints($rings); // Output: 1
