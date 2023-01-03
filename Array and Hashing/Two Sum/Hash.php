<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $tempArray = []; 
        
        foreach($nums as $key => $num){
            if(isset($tempArray[$target - $num]) && $tempArray[$target - $num] != $key){ 
                return [$tempArray[$target - $num], $key]; 
            } 
            $tempArray[$num] = $key;
        }

    }
}