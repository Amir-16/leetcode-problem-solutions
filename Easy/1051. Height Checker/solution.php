<?php
class Solution
{
    /**
     * @param Integer[] $heights
     * @return Integer
     */
    public function heightChecker($heights)
    {
        $count =0;

        $sortedHeights = $heights;

        sort($sortedHeights);

        foreach($heights as $key => $height) {

            if($height != $sortedHeights[$key]){
                $count++;
            }
        }

        return $count;
    }
}

$solution = new Solution();

$result = $solution->heightChecker([1, 1, 4, 2, 1, 3]);

print_r($result);
