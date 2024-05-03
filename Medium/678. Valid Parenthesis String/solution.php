<?php
class Solution
{
    public function checkValidString(string $s)
    {

        $length = strlen($s);

        $leftParenthesis = '(';

        $rightParenthesis = ')';

        $parenthesCheck = '*';

        $high = 0;

        $low = 0;

        for ($i = 0; $i < $length; $i++) {

            $char = $s[$i];

            if ($char == $leftParenthesis) {
                $low++;
                $high++;
            } elseif ($char == $rightParenthesis) {
                if ($low > 0) {
                    $low--;
                }
                $high--;
            } elseif ($char == $parenthesCheck) {
                if ($low > 0) {
                    $low--;
                }
                $high++;
            }

            if ($high < 0) {
                return false;
            }

        }

        return $low == 0;
    }
}

$solution = new Solution();

echo $solution->checkValidString('(*)');
