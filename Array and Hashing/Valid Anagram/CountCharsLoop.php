<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if (strlen($s) != strlen($t))
            return false ;

        $countS = $countT = [];

        for ($i = 0; $i < strlen($s); $i++){
            $countS[$s[$i]] = 1 + $countS[$s[$i]];
            $countT[$t[$i]] = 1 + $countT[$t[$i]];
        }

        return $countS == $countT;
    }
}