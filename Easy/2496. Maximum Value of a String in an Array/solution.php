<?php
class Solution
{
    /**
     * @param String[] $strs
     * @return Integer
     */
    public $maxValue = 0;

    public function maximumValue($strs)
    {

        foreach ($strs as $str) {
            if ($this->checkBothStringAndNumeric($str)) {
                $strLength = strlen($str);
                
                if ($strLength > $this->maxValue) {
                    $this->maxValue = $strLength;
                }
            } elseif (ctype_digit($str)) {
                $intValue = intval($str);

                if ($intValue > $this->maxValue) {
                    $this->maxValue = $intValue;
                }

            } else {
                $strLength = strlen($str);

                if ($strLength > $this->maxValue) {
                    $this->maxValue = $strLength;
                }
            }
        }

        return $this->maxValue;
    }

    private function checkBothStringAndNumeric($str)
    {
        return preg_match('/[a-zA-Z]/', $str) && preg_match('/\d/', $str);
    }
}

$solution = new Solution();

$result = $solution->maximumValue(["kzgy", "0qgl3", "4", "khzv", "jtglz", "85b", "47", "jf", "8i0a", "oy"]);

print_r($result);
