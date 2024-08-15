<?php
class Solution
{
    /**
     * @param Integer[] $widths
     * @param String $s
     * @return Integer[]
     */
    public function numberOfLines($widths, $s)
    {
        $lineWidth = 0;
        $lines = 1;

        for ($i = 0; $i < strlen($s); $i++) {

            $char = $s[$i];

            $charIndex = ord($char) - ord('a');

            $charWidth = $widths[$charIndex];

            if ($lineWidth + $charWidth > 100) {
                $lines++;
                $lineWidth = $charWidth;
            } else {
                $lineWidth += $charWidth;
            }
        }

        return [$lines, $lineWidth];

    }
}

$widths = [10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10];

$s = "abcdefghijklmnopqrstuvwxyz";

$solution = new Solution();

$result = $solution->numberOfLines($widths, $s);

print_r($result);
