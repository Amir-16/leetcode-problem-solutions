<?php
class Solution
{
    /**
     * @param String[] $strs
     * @return Integer
     */
    public function minDeletionSize($strs)
    {
        $deleteCount = 0;

        $rowCount = count($strs);

        $colCount = strlen($strs[0]);

        for ($col = 0; $col < $colCount; $col++) {
            $isSorted = true;

            for ($row = 1; $row < $rowCount; $row++) {
                // Compare only the current column
                if ($strs[$row][$col] < $strs[$row - 1][$col]) {
                    $isSorted = false;
                    break;
                }
            }

            if (!$isSorted) {
                $deleteCount++;
            }
        }
        return $deleteCount;
    }
}

$solution = new Solution();

$strs = ["cba", "daf", "ghi"];

echo $solution->minDeletionSize($strs); // Output: 1
