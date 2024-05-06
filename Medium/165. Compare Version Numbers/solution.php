<?php

class Solution
{

    /**
     * @param String $version1
     * @param String $version2
     * @return Integer
     */
    public function compareVersion($version1, $version2)
    {

        $v1 = explode('.', $version1);
        $v2 = explode('.', $version2);

        $length1 = count($v1);
        $length2 = count($v2);

        $length = max($length1, $length2);

        for ($i = 0; $i < $length; $i++) {
            $v1[$i] = $v1[$i] ?? 0;
            $v2[$i] = $v2[$i] ?? 0;

            if ($v1[$i] < $v2[$i]) {
                return -1;
            } elseif ($v1[$i] > $v2[$i]) {
                return 1;
            }
        }
        return 0;

    }
}

$solution = new Solution();

$result = $solution->compareVersion('1.01', '1.001');

print_r($result);
