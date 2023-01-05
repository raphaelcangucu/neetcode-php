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
    private $subRoot ;
    /**
     * @param TreeNode $root
     * @param TreeNode $subRoot
     * @return Boolean
     */
    function isSubtree($root, $subRoot) {
        $this->subRoot = $subRoot ;

        return $this->walk($root);
    }

    /**
     * @param TreeNode $root
     * @return void
     */
    function walk($node){
        if (!$node) return false ;

        $ret = $this->isSameTree($node, $this->subRoot);

        if(!$ret) {
            $left = $this->walk($node->left);

            $right = $this->walk($node->right);

            return ($left || $right);
        }
        else {
            return true ;
        }
        
    }

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
        if (!$p && !$q) return true ;
        if (!$p || !$q || $p->val != $q->val) return false ;

        return $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right); 
    }
}