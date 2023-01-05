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
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $hash = [];

        while($head){
            $hash[] = new ListNode($head->val) ;

            $head = $head->next;
        }

        unset($hash[count($hash) - $n]);

        $head = $newList = new ListNode ;
        foreach($hash as $node) {
            $newNode = new ListNode($node->val);
            $newList->next = $node ;
            $newList = $newList->next ;
        
        }
        
        return $head->next;
    }

   
}