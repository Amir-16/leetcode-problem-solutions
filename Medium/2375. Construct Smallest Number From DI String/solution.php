<?php
class Solution
{
    /**
     * @param String $pattern
     * @return String
     */
    public function smallestNumber($pattern)
    {
        $stack = [];

        $result = "";

        $num = 1;

        for ($i = 0; $i <= strlen($pattern); $i++) {

            $stack[] = $num++;

            if ($i == strlen($pattern) || $pattern[$i] == 'I') {
                while (! empty($stack)) {
                    $result .= array_pop($stack);
                }
            }
        }
        return $result;
    }
}

$solution = new Solution();

echo $solution->smallestNumber('IIIDIDDD'); // Output: "123"
