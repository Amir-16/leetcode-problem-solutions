<?php
class MyCalendarTwo
{
    private $bookings;
    private $overlaps;

    public function __construct()
    {
        $this->bookings = [];
        $this->overlaps = [];
    }

    /**
     * @param Integer $start
     * @param Integer $end
     * @return Boolean
     */
    public function book($start, $end)
    {
        foreach ($this->overlaps as $overlap) {
            if ($start < $overlap[1] && $end > $overlap[0]) {
                return false;
            }
        }

        // Check and add to overlaps if this new booking overlaps with any existing booking
        foreach ($this->bookings as $booking) {
            if ($start < $booking[1] && $end > $booking[0]) {
                $overlapStart = max($start, $booking[0]);
                $overlapEnd = min($end, $booking[1]);
                $this->overlaps[] = [$overlapStart, $overlapEnd];
            }
        }

        array_push($this->bookings, [$start, $end]);

        return true;
    }
}

/**
 * Your MyCalendarTwo object will be instantiated and called as such:
 * $obj = MyCalendarTwo();
 * $ret_1 = $obj->book($start, $end);
 */
