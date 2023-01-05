<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        
        $parentheses =  [ ')' => '('  , ']' => '[' ,'}' => '{' ];
        $stack = [];

        for ($i = 0; $i < strlen($s); $i++){
            // if is open, stack
            if(in_array($s[$i], $parentheses)) {
                $stack[] = $s[$i];
            }
            else {
                // get last on stack to verify
                $last = end($stack);
                
                if(empty($stack) || $parentheses[$s[$i]] != $last)
                {
                    return false;
                }
                
                array_pop($stack);
            }
            
        }

        return  count($stack) == 0;
    }
}