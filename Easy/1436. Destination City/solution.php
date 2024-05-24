<?php
class Solution
{
    /**
     * @param String[][] $paths
     * @return String
     */
    public function destCity($paths)
    {
        $startingCities = [];

        $otherCities = [];

        foreach ($paths as $path) {
            $startingCities[$path[0]] = 1;
            $otherCities[$path[1]] = 1;
        }

        foreach ($otherCities as $city => $starting) {
            if (!isset($startingCities[$city])) {
                return $city;
            }
        }

        return null;
    }
}

$solution = new Solution();

//$result = $solution->destCity([["London", "New York"], ["New York", "Lima"], ["Lima", "Sao Paulo"]]);

$result = $solution->destCity([["jMgaf WaWA", "iinynVdmBz"], [" QCrEFBcAw", "wRPRHznLWS"], ["iinynVdmBz", "OoLjlLFzjz"], ["OoLjlLFzjz", " QCrEFBcAw"], ["IhxjNbDeXk", "jMgaf WaWA"], ["jmuAYy vgz", "IhxjNbDeXk"]]
);

print_r($result);
