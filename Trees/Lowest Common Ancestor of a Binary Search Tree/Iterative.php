<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

class Solution {
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q) {
        $head = $root ;

        while($head){
            if($p->val > $head->val && $q->val > $head->val)
                $head = $head->right ;
            elseif($p->val < $head->val && $q->val < $head->val)
                $head = $head->left ;
            else
                return $head ;
        }
    }
}