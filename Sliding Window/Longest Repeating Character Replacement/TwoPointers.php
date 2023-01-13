<?php

class Solution
{
    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    public function characterReplacement($s, $k)
    {
        $freq = [];
        $maxRepeatLetterCount = 0;
        $left = 0;
        $maxLength = 0;

        // we will always move to right
        for ($right = 0; $right < strlen($s); $right++) {
            $freq[$s[$right]] = 1 + $freq[$s[$right]];
            $maxRepeatLetterCount = max($maxRepeatLetterCount, $freq[$s[$right]]);

            // current length of the window or substring
            $length = $right - $left + 1 ;

            // condition to move the window to the left
            if (($length - $maxRepeatLetterCount) > $k) {
                $freq[$s[$left]] -= 1; // remove caracter count from hash
                $left += 1;
            }

            // new length, because we could update the left
            $length = $right - $left + 1 ;

            // maxLength of the window / substring
            $maxLength = max($maxLength, $length);
        }

        return $maxLength;
    }
}
