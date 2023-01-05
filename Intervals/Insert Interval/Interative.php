<?php

class Solution {

    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
    function insert($intervals, $newInterval) {
        $list = [];
        for($i = 0; $i < count($intervals); $i++){
            // before current interval, just insert
            if($newInterval[1] < $intervals[$i][0]) {
                $list [] = $newInterval;
                return array_merge($list, array_splice($intervals, $i));
            }
            // after current interval
            elseif($newInterval[0] > $intervals[$i][1]) {
                $list [] = $intervals[$i];
            }
            // is overlapping
            else {
                // the new interval is the min and max of the two overlappings interval
                $newInterval = [min($newInterval[0], $intervals[$i][0]), max($newInterval[1], $intervals[$i][1])];
            }
            
        }

        $list [] = $newInterval;

        return $list ;
    }

}