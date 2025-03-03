<?php
class Solution
{
    /**
     * @param Integer[][] $nums1
     * @param Integer[][] $nums2
     * @return Integer[][]
     */
    public function mergeArrays($nums1, $nums2)
    {
        $map = [];

        foreach ($nums1 as $pair) {
            $id       = $pair[0];
            $value    = $pair[1];
            $map[$id] = ($map[$id] ?? 0) + $value;
        }

        foreach ($nums2 as $pair) {
            $id       = $pair[0];
            $value    = $pair[1];
            $map[$id] = ($map[$id] ?? 0) + $value;
        }

        ksort($map);

        $result = [];
        foreach ($map as $id => $value) {
            $result[] = [$id, $value];
        }

        return $result;
    }
}
