<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */


class Solution
{

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */

     public $list1;
     public $list2;

    function mergeTwoLists(array $list1,array $list2)
    {
        $mergelist =array_merge($list1, $list2);

       sort($mergelist);

        $length = count($mergelist);

        for($i =0; $i<$length; $i++){

           return  $data[] =$mergelist[$i];
        }

        
    }
}

    $solution = new Solution();
    $solution->mergeTwoLists([1, 2, 4],[1, 3, 4]);

?>