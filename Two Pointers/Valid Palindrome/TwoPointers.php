<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $left = 0;
        $right =  strlen($s) - 1;

        while($left <= $right){
            $leftChar = strtolower($s[$left]);
            $rightChar = strtolower($s[$right]);

            if(!ctype_alnum($leftChar))
            {
                $left++; 
                continue;
            }
            
            if(!ctype_alnum($rightChar))
            {
                $right--; 
                continue;
            }

            if($leftChar != $rightChar){
                return false ;
            }
            else {
                $left++; 
                $right--; 
            }
        }

        return true ;
    }
}