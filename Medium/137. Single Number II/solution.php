<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */

    public function singleNumber($nums)
    {
        $appearOnce = 0;
        $appearMultiple = 0;

        foreach ($nums as $num) {
            $appearOnce = (~$appearMultiple) & ($appearOnce ^ $num);
            $appearMultiple = (~$appearOnce) & ($appearMultiple ^ $num);
        }

        return $appearOnce;
    }

}

$solution = new Solution();

$result = $solution->singleNumber([0, 1, 0, 1, 0, 1, 99]);

echo $result;
