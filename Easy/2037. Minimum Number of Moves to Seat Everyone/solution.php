<?php

class Solution
{
    /**
     * @param Integer[] $seats
     * @param Integer[] $students
     * @return Integer
     */
    public function minMovesToSeat($seats, $students)
    {
        sort($seats);
        sort($students);

        $seatCount = count($seats);

        $totalMoves = 0;

        for ($i = 0; $i < $seatCount; $i++) {
            $totalMoves += abs($seats[$i] - $students[$i]);
        }
        return $totalMoves;
    }
}

$solution = new Solution();

echo $solution->minMovesToSeat([3, 1, 5], [2, 7, 4]); 

// Output: 6

//echo $solution->minMovesToSeat([4, 1, 2, 3], [5, 1, 4, 2]); // Output: 11
