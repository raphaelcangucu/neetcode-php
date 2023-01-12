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
     * ordered
     */
    private $ordered = [];

    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthSmallest($root, $k) {
        
        $this->getOrdered($root);

        sort($this->ordered);

        return $this->ordered[$k-1];
    }

    /**
     * @param TreeNode $node
     * @param Boolean $left
     */
    function getOrdered($node) {
        if($node == null) return ;

        $this->ordered[] = $node->val ;

        $this->getOrdered($node->left);
        $this->getOrdered($node->right);
        
    }
}