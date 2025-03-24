<?php
class Solution
{
    /**
     * @param Integer $days
     * @param Integer[][] $meetings
     * @return Integer
     */
    public function countDays($days, $meetings)
    {
        sort($meetings);

        $freeDays = 0;

        $lastEnd = 0;

        foreach ($meetings as $meeting) {
            list($start, $end) = $meeting;

            if ($start > $lastEnd + 1) {
                $freeDays += $start - $lastEnd - 1;
            }

            $lastEnd = max($lastEnd, $end);
        }

        $freeDays += $days - $lastEnd;

        return $freeDays;
    }
}

$solution = new Solution();

$days = 7;

$meetings = [[1, 2], [2, 3], [3, 4]];

$result = $solution->countDays($days, $meetings);

echo $result;
