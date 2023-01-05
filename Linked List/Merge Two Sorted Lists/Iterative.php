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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $head = $newList = new ListNode ;
        
        while($list1 != null || $list2 != null ){

            if($list1->val <= $list2->val && $list1 || !$list2){
                $newNode = new ListNode($list1->val);
                $list1 = $list1->next ;
            }
            elseif($list2) {
                $newNode = new ListNode($list2->val);
                $list2 = $list2->next ;
            }

            if($newList) {
                $newList->next = $newNode ;
                $newList = $newList->next ;
            }
           
        }

        return $head->next ;
    }
}