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
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        return $this->reverse($head, null);
        
    }

    /**
     * @param ListNode $head
     * @param ListNode $newHead
     * @return ListNode
     */
     function reverse($head, $newHead) {
        if($head == null) return $newHead;
        
        $next = $head->next;
        $head->next = $newHead;
        
        return $this->reverse($next, $head);
     }
}