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
     * Counts the max depth of the tree
     */
    private $maxDepth = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        $this->walk($root, 1);

        return $this->maxDepth;
    }

    /**
     * @param TreeNode $root
     * @return void
     */
    function walk($node, $depth){
        if ($node == null) return ;

        $this->maxDepth = max($depth, $this->maxDepth);

        $this->walk($node->left, ($depth + 1));

        $this->walk($node->right, ($depth + 1));
        
    }
}