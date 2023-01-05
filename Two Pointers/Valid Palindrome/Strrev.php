<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = strtolower(preg_replace('/[^[:alnum:]]/u', '', $s));
        return $s == strrev($s);
    }
}