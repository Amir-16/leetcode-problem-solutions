<?php
class Solution
{
    public $result;
    public function diStringMatch($s)
    {
        $length = strlen($s);
        $low = 0;
        $high = $length;
        $this->result = [];

        for ($i = 0; $i < $length; $i++) {
            if ($s[$i] === 'I') {
                array_push($this->result, $low++);
            } else {
                array_push($this->result, $high--);
            }
        }

        $this->result[] = $low;

        return $this->result;
    }
}

$solution = new Solution();

$result = $solution->diStringMatch('IDID');

print_r($result);
