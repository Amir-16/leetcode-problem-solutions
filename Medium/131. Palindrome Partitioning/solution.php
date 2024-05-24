<?php
class Solution {
    public function partition($s) {
        $result = [];
        $this->backtrack($s, 0, [], $result);
        return $result;
    }

    private function backtrack($s, $start, $path, &$result) {
        if ($start == strlen($s)) {
            $result[] = $path;
            return;
        }
        
        for ($end = $start + 1; $end <= strlen($s); $end++) {
            $substring = substr($s, $start, $end - $start);
            if ($this->isPalindrome($substring)) {
                $path[] = $substring;
                $this->backtrack($s, $end, $path, $result);
                array_pop($path); 
            }
        }
    }

    private function isPalindrome($s) {
        return $s === strrev($s);
    }
}


$solution = new Solution();
$s = "aab";
$result = $solution->partition($s);
print_r($result);