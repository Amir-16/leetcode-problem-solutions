<?php
class ListNode1 {
    public $val = 0;
    public $next = null;
    
    function __construct ($val = 0 , $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {
   
    function reverseList($head) {
        $prev = null;
        $current = $head;
        
        while ($current != null) {
            $nextTemp = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $nextTemp;
        }
        
        return $prev;
    }
}

function createLinkedListFromArray($arr) {
    $dummy = new ListNode1();
    $current = $dummy;
    
    foreach ($arr as $val) {
        $current->next = new ListNode1($val);
        $current = $current->next;
    }
    
    return $dummy->next;
}

function linkedListToArray($head) {
    $arr = [];
    $current = $head;
    
    while ($current != null) {
        $arr[] = $current->val;
        $current = $current->next;
    }
    
    return $arr;
}

// Test
$input = [1, 2, 3, 4, 5];
$head = createLinkedListFromArray($input);

$solution = new Solution();
$reversed = $solution->reverseList($head);

$output = linkedListToArray($reversed);
echo "[" . implode(",", $output) . "]";
