<?php
class Solution
{
    /**
     * @param String $s
     * @param Integer[] $distance
     * @return Boolean
     */
    public function checkDistances($s, $distance)
    {
        $n    = strlen($s);
        
        $last = array_fill(0, 26, -1);

        for ($i = 0; $i < $n; $i++) {
            $index = ord($s[$i]) - ord('a');
            if ($last[$index] != -1) {
                if ($i - $last[$index] - 1 != $distance[$index]) {
                    return false;
                }
            }
            $last[$index] = $i;
        }
        return true;
    }
}

$solution = new Solution();

$s        = 'abac';
$distance = [1, 3, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
$result   = $solution->checkDistances($s, $distance);
echo $result ? 'true' : 'false';
