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
    private $solution = [];
    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrder($root) {
        $this->walk($root, 0);

        return $this->solution;
    }

    /**
     * @param TreeNode $root
     * @return void
     */
    function walk($node, $depth){
        if ($node == null) return ;

        if(!isset($this->solution[$depth])) $this->solution[$depth] = [];

        array_push($this->solution[$depth], $node->val) ;

        $this->walk($node->left, ($depth + 1));

        $this->walk($node->right, ($depth + 1));
        
    }
}