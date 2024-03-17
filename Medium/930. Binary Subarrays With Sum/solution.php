<?php
class Solution
{

    public function numSubarraysWithSum($nums, $goal)
    {
        $count = 0;
        $sum = 0;
        $prefixSum = array();
        $prefixSum[0] = 1;

        foreach ($nums as $num) {
            // Calculate current prefix sum
            $sum += $num;
            // it means the subarray between these two prefix sums has the sum equal to the goal.
            if (isset($prefixSum[$sum - $goal])) {
                $count += $prefixSum[$sum - $goal]; // Increment count
            }
            // Increment the prefix sum count for the current sum
            if (!isset($prefixSum[$sum])) {
                $prefixSum[$sum] = 0;
            }
            $prefixSum[$sum]++;
        }

        return $count;
    }
}

$nums = [1, 0, 1, 0, 1];
$goal = 2;

$solution = new Solution();

$result = $solution->numSubarraysWithSum($nums, $goal);

echo $result;

?>
