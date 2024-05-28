<?php
class Solution
{
    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    public function restoreString($s, $indices)
    {
        $shuffled = array_fill(0, count($indices), ' ');

        foreach ($indices as $key => $indice) {
            $shuffled[$indices[$key]] = $s[$key];

        }

        return implode('', $shuffled);

    }
}

$solution = new Solution;

$result = $solution->restoreString('codeleet', [4, 5, 6, 7, 0, 2, 1, 3]);

print_r($result);
