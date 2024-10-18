<?php
class Solution
{
    /**
     * @param Integer $num
     * @return Integer
     */
    public function maximumSwap($num)
    {

        $digits = str_split($num);

        $last = array_fill(0, 10, -1);

        foreach ($digits as $i => $digit) {
            $last[$digit] = $i;
        }

        foreach ($digits as $i => $digit) {

            for ($d = 9; $d > $digit; $d--) {

                if ($last[$d] > $i) {
                    $temp = $digits[$i];
                    $digits[$i] = $digits[$last[$d]];
                    $digits[$last[$d]] = $temp;

                    return intval(implode('', $digits));
                }
            }
        }
        return $num;
    }
}

$solution = new Solution();

$result = $solution->maximumSwap(2736);

print_r($result);
