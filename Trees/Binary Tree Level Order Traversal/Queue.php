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
     * @return Integer[][]
     */
    function levelOrder($root) {
        $solution = [];
        $q = new SplQueue();
        $q->enqueue($root);

        while(!$q->isEmpty()){
            $count = $q->count();
            $level = [] ;
            for($i = 0; $i < $count; $i++){
                $node = $q->dequeue();
                if($node) {
                    $level [] = $node->val;
                    $q->enqueue($node->left);
                    $q->enqueue($node->right);
                }
            }
            if($level)
                $solution[] = $level ;
        }

        return $solution;
    }

   
}