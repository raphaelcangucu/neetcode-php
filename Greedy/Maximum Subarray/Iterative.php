<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $max = $nums[0];

        $total = 0;
        foreach($nums as $num){
            $total += $num; // keep sum
            $max = max($max, $total); // get max
            if ($total < 0) // if get less than zero, reset and starting sum again
                $total = 0;
        }

        return $max;
    }
}