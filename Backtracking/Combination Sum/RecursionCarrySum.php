<?php

class Solution {

    /**
     * Candidates array
     */
    private $candidates;

    /**
     * List with combinations
     */
    private $combinations = [];

    /**
     * Target value
     */
    private $target;

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        $this->candidates = $candidates;
        $this->target = $target;

        $cur = [];
        $this->recursionSum(0,$cur,0);

        return $this->combinations;
    }

    /**
     * @param Integer $i current position on candidates
     * @param Integer [] $cur current combination
     * @param Integer $total total sum
     * @return void
     */
    function recursionSum($i, & $cur, $total){
        if($total == $this->target){
            $this->combinations[] = array_merge($cur) ;
            return;
        }
        
        if(! isset($this->candidates[$i]) || $total > $this->target) return;

        $cur [] = $this->candidates[$i];
        $this->recursionSum($i, $cur, $total + $this->candidates[$i]);
        array_pop($cur);
        $this->recursionSum($i+1, $cur, $total);
    }
}