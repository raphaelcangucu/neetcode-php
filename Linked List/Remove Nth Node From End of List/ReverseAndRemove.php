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
        $newHead = $newList = new ListNode($head->val);
        $head = $this->reverse($head, null);
        $i = 1;

        while($head){
            if($i == $n) {
                $remove = $head->next;
                $head = $remove ;
            }
            
            if(!is_null($head->val)){
                $newNode = new ListNode($head->val);
                $newList->next = $newNode;
                $newList = $newList->next ;
            }

            $head = $head->next;
            $i++;
        }

        $head = $this->reverse($newHead->next, null);

        return $head;
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