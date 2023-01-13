<?php

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    public function lengthOfLongestSubstring($s)
    {
        if (strlen($s) == 0) {
            return 0 ;
        }

        $left = 0;
        $right = 1;
        $maxLenght = 1 ;
        $sub = $s[$left] ;

        while ($right < strlen($s)) {
            if (strpos($sub, $s[$right]) === false) {
                $sub .= $s[$right];
                $maxLenght = max($maxLenght, strlen($sub));
                $right++ ;
            } else {
                $left++ ;
                $right = $left + 1  ;
                $sub = $s[$left] ;
            }
        }

        return $maxLenght ;
    }
}
