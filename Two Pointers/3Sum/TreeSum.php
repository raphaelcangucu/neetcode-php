<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $list = [];

        // sort
        sort($nums);

        for($i = 0; $i < count($nums); $i++){
            
            if($i > 0 && $nums[$i] == $nums[$i - 1]) continue ;

            $left = $i + 1 ;
            $right = count($nums) - 1;

            while($left < $right){
              
                $threeSum = $nums[$i] + $nums[$left] + $nums[$right];
                if($threeSum == 0){
                    $list[] = [$nums[$i] , $nums[$left] , $nums[$right]];
                    $left++ ;
                    while ($nums[$left] == $nums[$left-1] && $left < $right) $left++ ;
                }
                elseif($threeSum > 0){
                    $right-- ;
                }
                else{
                    $left++ ;
                }
            }
        }

        return $list ;

    }

    
}