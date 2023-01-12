<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $goal = count($nums) - 1;

        // just go backwards 
        for ($i = ($goal-1); $i > -1; $i--){
            if ($i + $nums[$i] >= $goal) // see if i can get to the last current position
                $goal = $i; // update the goal with the new index
        }
        // if we are at the zero position in the end, so its true
        return $goal == 0;
    }
}