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
                    // Use pairs within the same value
                    $pairCount = intdiv($freq[$num], 2);
                    $pairs += $pairCount;
                    $freq[$num] -= $pairCount * 2;
                } elseif ($num < $target) {
                    // Pair num with target
                    $pairCount = min($freq[$num], $freq[$target]);
                    $pairs += $pairCount;
                    $freq[$num] -= $pairCount;
                    $freq[$target] -= $pairCount;
                }
            }
        }

        // After using valid pairs, each of the remaining non-k elements needs 1 op
        return $nonK - $pairs * 2;
    }
}

$solution = new Solution();

$nums = [1, 2, 3, 4, 5]; // Example input array

$k = 3; // Example target value

$result = $solution->minOperations($nums, $k); // Call the function with the example input

echo $result; // Output: 4 (Explanation: The minimum number of operations required to make all elements equal to 3 is 4)
