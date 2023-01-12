<?php

class Solution {

    /**
     * This solution will use a Binary Search algorithm
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        $min = $nums[0];
        $left = 0;
        $right = count($nums) - 1;

        while ($left <= $right){
            if($nums[$left] < $nums[$right]){
                $min = min($min, $nums[$left]);
                break ;
            }

            $middle = floor(($left + $right)/2);
            $min = min($min, $nums[$middle]);

            // check direction to left
            if($nums[$middle] >= $nums[$left]){
                $left = $middle + 1;
            }
            else {
                $right = $middle - 1;
            }

        }   

        return $min;
    }
}