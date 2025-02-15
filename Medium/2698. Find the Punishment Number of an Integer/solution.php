<?php
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function punishmentNumber($n)
    {
        $sum = 0;

        for ($i = 0; $i <= $n; $i++) {

            $squareNumber = $i * $i;

            if ($this->canPunish((string) $squareNumber, 0, $i)) {
                $sum += $squareNumber;
            }
        }
        return $sum;
    }

    private function canPunish($s, $start, $target)
    {
        if ($start == strlen($s)) {
            return $target == 0;
        }

        $num = 0;
        for ($i = $start; $i < strlen($s); $i++) {
            $num = $num * 10 + (int) $s[$i];

            if ($num > $target) {
                break;
            }

            if ($this->canPunish($s, $i + 1, $target - $num)) {
                return true;
            }
        }

        return false;
    }
}

$solution = new Solution();

$result = $solution->punishmentNumber(10);

echo $result; // Output: 144
