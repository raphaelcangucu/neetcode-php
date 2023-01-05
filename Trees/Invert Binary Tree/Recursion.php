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
     * @return TreeNode
     */
    function invertTree($root) {

        $this->walk($root);

        return $root;
    }

    /**
     * walk to the tree
     * @param TreeNode $root
     * @return TreeNode
     */
    function walk(&$node){
        
        // if has nodes, just swap
        if($node->left || $node->right){
            $this->swap($node);
        }
       
        if($node->left)
            $this->walk($node->left);

        if($node->right)
            $this->walk($node->right);
        
        
        return $node;
    }

    /**
     * swap node
     * @param TreeNode $root
     */
    function swap(&$node){
        $right = $node->right ;
        $node->right = $node->left;
        $node->left = $right;
    }
}