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
     * @return Boolean
     */
    function isValidBST($root) {
        return $this->valid($root, -PHP_FLOAT_MAX, PHP_FLOAT_MAX);
    }

    /**
     * @param TreeNode $root
     * @param Float $left boundary
     * @param Float $right boundary
     * @return Boolean
     */
    function valid($node, $left, $right){
        if($node == null) return true ;

        if(!($node->val < $right && $node->val > $left)) return false ;
        
        return $this->valid($node->left, $left, $node->val) && $this->valid($node->right, $node->val, $right);
    }
}