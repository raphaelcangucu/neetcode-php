<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $hash = [];

        foreach($strs as $key => $value){
            $countSerial = serialize(count_chars($value, 1));
            if(!isset($hash[$countSerial])) $hash[$countSerial] = [];
            array_push($hash[$countSerial], $value); 
        }

        return $hash;
    }
}