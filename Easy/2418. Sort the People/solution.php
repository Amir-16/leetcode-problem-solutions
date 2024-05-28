<?php
class Solution
{

    /**
     * @param String[] $names
     * @param Integer[] $heights
     * @return String[]
     */
    public function sortPeople($names, $heights)
    {
        array_multisort($heights, SORT_DESC, $names);

        return $names;

    }
}
$solution = new Solution();

$result = $solution->sortPeople(["Mary", "John", "Emma"], [180, 165, 170]);

print_r($result);
