<?php

class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {
        $list = [];

        // sort first
        $this->sort($intervals);
        
        $newInterval = $intervals[0];
        for($i = 1; $i < count($intervals); $i++){
            // before current interval, just insert
            if($newInterval[1] < $intervals[$i][0]) {
                $list [] = $newInterval;
                $newInterval = $intervals[$i];
            }
            // after current interval
            elseif($newInterval[0] > $intervals[$i][1]) {
                $list [] = $intervals[$i];
                $newInterval = $intervals[$i];
            }
            // is overlapping
            else {
                $newInterval = [min($newInterval[0], $intervals[$i][0]), max($newInterval[1], $intervals[$i][1])];
            }

        }

        $list [] = $newInterval;

        return $list;
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