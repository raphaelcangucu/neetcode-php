<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($root, $k) {
        $stack = [];
        $current = $root ;

        while($stack or $current){
            // first walk to the left
            while ($current){
                $stack[] = $current;
                $current = $current->left ;
            }
            // then pop from stack the last left 
            $current = array_pop($stack);
            
            $k--; //decrease $k because we poped one left
            
            // we reached the k smallest
            if($k == 0) return $current->val ;

            // if nothing happens walk to right from the last left position
            $current = $current->right ;
        }
    }

}