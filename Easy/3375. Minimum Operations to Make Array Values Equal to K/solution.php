<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */public function minOperations(array $nums, int $k): int
    {
        $freq = [];
        $nonK = 0;

        // Count all numbers ≠ k
        foreach ($nums as $num) {
            if ($num != $k) {
                $freq[$num] = ($freq[$num] ?? 0) + 1;
                $nonK++;
            }
        }

        $pairs = 0;

        foreach ($freq as $num => $count) {
            $target = 2 * $k - $num;

            if (isset($freq[$target])) {

                if ($num == $target) {
                    $pairCount = intdiv($freq[$num], 2);
                    $pairs += $pairCount;
                    $freq[$num] -= $pairCount * 2;
                } elseif ($num < $target) {
                    $pairCount = min($freq[$num], $freq[$target]);
                    $pairs += $pairCount;
                    $freq[$num] -= $pairCount;
                    $freq[$target] -= $pairCount;
                }
            }
        }
        return $nonK - $pairs * 2;
    }
}
$solution = new Solution();

$nums = [1, 2, 3, 4, 5];

$k = 3;

$result = $solution->minOperations($nums, $k);

echo $result;
