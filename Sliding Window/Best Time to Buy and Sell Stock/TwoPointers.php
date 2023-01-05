<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $left = 0 ;
        $right = 1 ;
        $maxProfit = 0 ;
        $sizeOf = count($prices);

        while($right < $sizeOf ){
            $profit = $prices[$right] - $prices[$left];

            if($profit < 0) {
                $left = $right;
            }

            $right++;

            $maxProfit = max($maxProfit, $profit);  
        }

        return $maxProfit ;
    }
}