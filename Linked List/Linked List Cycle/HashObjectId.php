<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

 class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $hash = [];

        while($head){
            
            $zval = spl_object_id($head) ;

            if(isset($hash[$zval])) return true;

            $hash[$zval] = true ;

            $head = $head->next;
        }

        return false;
    }
}