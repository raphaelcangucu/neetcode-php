<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $hash = [];
        
        foreach ($nums as $value){
            $hash[$value] += 1 ;
        }

        arsort($hash);
        
        $hash = array_keys($hash);
        
        return array_splice($hash, 0, $k);
    }
}