<?php
class Solution
{
    /**
     * @param String[] $operations
     * @return Integer
     */
    public function calPoints($operations)
    {
        $stack = [];

        foreach ($operations as $operation) {

            match ($operation) {
                '+' => $stack[] = $stack[count($stack) - 1] + $stack[count($stack) - 2],
                'D' => $stack[] = 2 * $stack[count($stack) - 1],
                'C' => array_pop($stack),
                default => $stack[] = intval($operation),
            };
        }
        return array_sum($stack);
    }
}

$solution = new Solution();

$operations = ["5", "2", "C", "D", "+"];

$result = $solution->calPoints($operations);

echo $result; // Output: 30
