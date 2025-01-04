<?php
class Solution
{
    /**
     * @param Integer[][] $items1
     * @param Integer[][] $items2
     * @return Integer[][]
     */
    public function mergeSimilarItems($items1, $items2)
    {
        $merged = [];

        foreach ($items1 as $item) {
            $value = $item[0];
            $weight = $item[1];

            if (!isset($merged[$value])) {
                $merged[$value] = 0;
            }
            $merged[$value] += $weight;
        }

        foreach ($items2 as $item) {
            $value = $item[0];
            $weight = $item[1];
            if (!isset($merged[$value])) {
                $merged[$value] = 0;
            }
            $merged[$value] += $weight;
        }

        ksort($merged);

        $result = [];
        foreach ($merged as $value => $weight) {
            $result[] = [$value, $weight];
        }

        return $result;
    }
}

$solution = new Solution();

$items1 = [[1, 1], [4, 5], [7, 1]];

$items2 = [[3, 2], [4, 3], [5, 2]];

$result = $solution->mergeSimilarItems($items1, $items2);

print_r($result);
 