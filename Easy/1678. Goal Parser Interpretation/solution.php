<?php
class Solution
{
    /**
     * @param String $command
     * @return String
     */
    public function interpret($command)
    {
        $result = '';

        $length = strlen($command);

        for ($i = 0; $i < $length; $i++) {
            if ($command[$i] === 'G') {
                $result .= 'G';
            } elseif ($command[$i] === '(') {
                if ($command[$i + 1] === ')') {
                    $result .= 'o';
                    $i++;
                } else {
                    $result .= 'al';
                    $i += 3;
                }
            }
        }
        return $result;
    }
}
// Example usage:
$solution = new Solution();
echo $solution->interpret("G()(al)") . "\n";
