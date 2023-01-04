<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $answer = [] ;
        $prefix = [] ;
        $sufix = [] ;
        
        $j = $count = count($nums);
        for($i = 0 ; $i < $count ; $i++){
            
            if($i > 0) {
                $prefixMult *= $nums[$i - 1];
            }
            else {
                $prefixMult = 1 ;
            }

            if($j == $count) {
                $sufixMult = 1 ;
            }
            else {
                $sufixMult *= $nums[$j];
            }

            $prefix[$i] = $prefixMult * $nums[$i];
            $sufix[$j-1] = $sufixMult * $nums[$j - 1];

            $j--;
        }
       
        for($i = 0 ; $i < $count ; $i++){
            $answer[$i] = ($prefix[$i - 1] ?? 1) * ($sufix[$i + 1] ?? 1);
        }


        return $answer;
    }
}
