<?php
class Solution
{
    /**
     * @param Integer[][] $edges
     * @return Integer
     */
    public function findCenter($edges)
    {
        $edge1 =$edges[0];
        $edge2 =$edges[1];


        if(in_array($edge1[0],$edge2)) {
            return $edge1[0];
        } else {
            return $edge1[1];
        }

    }
}

$solution = new Solution();

$result = $solution->findCenter([[1, 2], [2, 3], [4, 2]]);

print_r($result);


