<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    public function removeElement(&$nums, $val)
    {
        $k = 0; // Initialize the write pointer
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] != $val) {
                $nums[$k] = $nums[$i]; // Copy the element if it's not the target
                $k++; // Move the write pointer
            }
        }
        return $k; // The new length of the array
    }

}

// Example usage:
$nums = [3, 2, 2, 3];
$val = 3;
$solution = new Solution;
$newLength = $solution->removeElement($nums, $val);
echo "New length: $newLength\n";
print_r(array_slice($nums, 0, $newLength));
