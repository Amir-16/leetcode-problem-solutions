<?php
class Solution
{
    /**
     * @param Integer[] $order
     * @param Integer[] $friends
     * @return Integer[]
     */
    public function recoverOrder($order, $friends)
    {
        $friendFlip = array_flip($friends);

        $result = [];

        foreach ($order as $value) {
            if (isset($friendFlip[$value])) {
                $result[] = $value;
            }
        }
        return $result;
    }
}
