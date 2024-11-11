<?php
class Solution
{
    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    public function canPlaceFlowers($flowerbed, $n)
    {
        $length = count($flowerbed);

        for ($i = 0; $i < $length; $i++) {
            if ($flowerbed[$i] == 0 && ($i == 0 || $flowerbed[$i - 1] == 0) && ($i == $length - 1 || $flowerbed[$i + 1] == 0)) {
                $flowerbed[$i] = 1;
                $n--;
                if ($n == 0) {
                    return true;
                }

            }
        }
        return $n <= 0;
    }
}
