<?php
class Solution
{
    /**
     * @param String $date
     * @return String
     */
    public function convertDateToBinary($date)
    {
        [$year, $month, $day] = explode('-', $date);

        $yearBinary  = decbin((int) $year);
        $monthBinary = decbin((int) $month);
        $dayBinary   = decbin((int) $day);

        return $yearBinary . '-' . $monthBinary . '-' . $dayBinary;
    }
}

$solution = new Solution();

$date = '2023-10-05';

$result = $solution->convertDateToBinary($date);

print_r($result);
