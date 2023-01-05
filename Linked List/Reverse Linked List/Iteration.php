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
        
        if($head == null){
            return $head;
        }

        $prev = null;
        $present = $head;
        $next = $present->next;

        while($present != null){

            $present->next = $prev;
            $prev = $present->next;
            $prev = $present;
            $present = $next;
            if($next != null){
                $next = $next->next;
            }
        }

        return $prev;
        
    }

   
}