<?php
class Solution
{
    /**
     * @param String[] $logs
     * @return Integer
     */
    public function minOperations($logs)
    {
        $depth = 0;

        foreach ($logs as $log) {

            if ($log == "../") {

                if ($depth > 0) {
                    $depth--;
                }

            } elseif ($log != "./") {
                $depth++;
            }
        }
        return $depth;
    }
}

$logs = ["dir\n\tsubdir1\n\tsubdir2\n\t\tfile1.txt"];

$solution = new Solution();

$result = $solution->minOperations($logs);

echo $result; // Output: 2
