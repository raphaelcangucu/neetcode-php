<?php

class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function eraseOverlapIntervals($intervals) {
        // sort first
        $this->sort($intervals);
        
        $endValue = $intervals[0][1];
        $sizeOfIntervals = count($intervals);
        $count = 0;
        for($i = 1; $i < $sizeOfIntervals ; $i++){

            // no overlapping
            if($intervals[$i][0] >= $endValue){
                $endValue = $intervals[$i][1];
            }
            else { // has overlapping
                $count++;
                
                $endValue = min($intervals[$i][1], $endValue);
            }
        }

        return $count;

    }

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function sort(& $intervals) {
        usort($intervals, function ($a, $b) {
            return $a[0] - $b[0];
        });
    }
}