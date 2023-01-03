<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        sort($nums);

        $prev = $nums[0];
        for($i = 1; $i < count($nums); $i++){
            if($prev == $nums[$i]) return true ;

            $prev = $nums[$i];
        }
        return false;
    }
}