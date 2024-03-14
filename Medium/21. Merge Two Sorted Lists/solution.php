<?php
class ListNode
{
    public $val = 0;
    public $next = null;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    public function mergeTwoLists($list1, $list2)
    {
        $dummy = new ListNode();
        $current = $dummy;

        while (!empty($list1) && !empty($list2)) {
            if ($list1->val < $list2->val) {
                $current->next = $list1;
                $list1 = $list1->next;
            } else {
                $current->next = $list2;
                $list2 = $list2->next;
            }
            $current = $current->next;
        }

        if (!empty($list1)) {
            $current->next = $list1;
        } elseif (!empty($list2)) {
            $current->next = $list2;
        }

        return $dummy->next;
    }
}
