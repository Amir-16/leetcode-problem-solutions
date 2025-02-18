<?php
class Solution
{
    /**
     * @param String $tiles
     * @return Integer
     */
    public function numTilePossibilities($tiles)
    {
        $counter = array_count_values(str_split($tiles));

        return $this->backtrack($counter);
    }

    private function backtrack(&$counter)
    {
        $count = 0;
        foreach ($counter as $char => $freq) {
            if ($freq > 0) {
                $count++;
                $counter[$char]--;
                $count += $this->backtrack($counter);
                $counter[$char]++;
            }
        }
        return $count;
    }
}

$tiles = "AAB";

$solution = new Solution();

$result = $solution->numTilePossibilities($tiles);

echo $result; // Output: 8
