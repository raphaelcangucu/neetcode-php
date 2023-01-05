<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
     
    function longestConsecutive($nums) {
        $longestSequence = 0;
        $uniques = [];

        foreach ($nums as $num){
            $uniques[$num] = true ;
        }

        foreach ($nums as $num){
            if($this->isFirst($num, $uniques)){
                $currentSequence = 1;
                while($this->hasNext($num + $currentSequence, $uniques)){
                    $currentSequence++;
                }

                $longestSequence = max($longestSequence, $currentSequence);
            }
            
        }

        return $longestSequence;
    }

    

    /**
     * @param Integer $num
     * @param Integer[] $nums
     * @return Boolean
     */
    function isFirst($num, $nums){
        return !isset($nums[$num-1]);
    }

    /**
     * @param Integer $num
     * @param Integer[] $nums
     * @return Boolean
     */
    function hasNext($num, $nums){
        return isset($nums[$num]);
    }
}