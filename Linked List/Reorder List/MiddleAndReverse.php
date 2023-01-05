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
     * @return NULL
     */
    function reorderList($head) {
        // find middle
        $slow = $head;
        $fast = $head->next;

        while ($fast && $fast->next){
            $slow = $slow->next;
            $fast = $fast->next->next ;
        }

        // reverse second half
        $second = $slow->next ;
        $prev = $slow->next = null ;
        while ($second){
            $tmp = $second->next;
            $second->next = $prev;
            $prev = $second ; 
            $second = $tmp;
        }

        // merge two halfs
        $first = $head;
        $second = $prev;
        while ($second){
            $tmp1 = $first->next ; 
            $tmp2 = $second->next;
            $first->next = $second ;
            $second->next = $tmp1 ;
            $first = $tmp1;
            $second = $tmp2;
        }
        
    }

}