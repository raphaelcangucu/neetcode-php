<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {

        $left = 0;
        $right = count($nums) - 1;

        while ($left <= $right){   
            $mid = floor(($left + $right)/2);

            if ($target == $nums[$mid])
                return $mid;

            //left sorted portion
            if ($nums[$left] <= $nums[$mid]){
                if ($target > $nums[$mid] || $target < $nums[$left]){
                    $left = $mid + 1;
                }
                else {
                    $right = $mid - 1;
                }
            }
            //right sorted portion
            else{
                if ($target < $nums[$mid] || $target > $nums[$right]){
                    $right = $mid - 1;
                }
                else{
                    $left = $mid + 1;
                }
            }

        }   

        return -1;
    }
}