<?php
class Solution
{
    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Boolean
     */
    public function canArrange($arr, $k)
    {

        $remainderCount = array_fill(0, $k, 0);

        foreach ($arr as $num) {
            $remainder = $num % $k;
            if ($remainder < 0) {
                $remainder += $k; // Handle negative numbers
            }
            $remainderCount[$remainder]++;
        }
        for ($i = 1; $i < $k; $i++) {
            // If remainderCount[i] doesn't match remainderCount[k-i], return false
            if ($remainderCount[$i] != $remainderCount[$k - $i]) {
                return false;
            }
        }

        return $remainderCount[0] % 2 == 0;
    }
}

// Example usage
$arr = [1, 2, 3, 4, 5, 10, 6, 7, 8, 9];
$k = 5;

$solution = new Solution();

$result = $solution->canArrange($arr, $k);

echo $result ? "True" : "False";
