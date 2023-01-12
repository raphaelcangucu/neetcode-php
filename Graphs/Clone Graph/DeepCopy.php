<?php

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $neighbors = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->neighbors = array();
 *     }
 * }
 */

 class Solution {

    /**
     * hash map already visited nodes
     */
    private $visited = [];
    
    /**
     * @param Node $node
     * @return Node
     */
    function cloneGraph($node) {
        if($node){
            return $this->deepCopy($node);
        }
        else return null ;
    }

    /**
     * @param Node $node
     * @return Node || null
     */
    function deepCopy($node) {
        if(!isset($this->visited[spl_object_id($node)])) {
         
            $this->visited[spl_object_id($node)] =  new Node($node->val);

            foreach($node->neighbors as $neighbor){
                $this->visited[spl_object_id($node)]->neighbors[] = $this->deepCopy($neighbor);
            }

        }

        return $this->visited[spl_object_id($node)];
    
    }
}