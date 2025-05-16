<?php
class Solution
{
    /**
     * @param Integer[][] $image
     * @return Integer[][]
     */
    public function flipAndInvertImage($image)
    {
        foreach ($image as &$row) {
            $row = array_reverse($row);

            foreach ($row as &$pixel) {

                $pixel = $pixel == 0 ? 1 : 0;
             //   $pixel  = $pixel ^ 1; // bitwise XOR operator
            }
        }
        return $image;
    }
}
$solution = new Solution();

$image = [[1, 1, 0], [1, 0, 1], [0, 0, 0]];

$result = $solution->flipAndInvertImage($image);

print_r($result);
