<?php

class Solution {
    /**
     * Board matrix
     */
    private $board;

    /**
     * word
     */
    private $word;

    /**
     * rows
     */
    private $rows = 0;

    /**
     * columns
     */
    private $columns = 0;

    /**
     * path hash set
     */
    private $path ;

    /**
     * @param String[][] $board
     * @param String $word
     * @return Boolean
     */
    function exist($board, $word) {
        $this->board = $board;
        $this->word = $word;
        $this->rows = count($board);
        $this->columns = count($board[0]);
        $this->path = [];
        
        // going to all positions and check the first letter and the walk recursive
        for($row = 0; $row < $this->rows; $row++){
            for($column = 0; $column < $this->columns; $column++){
                if($this->walkBoard($row, $column, 0)) return true ;
            }
        }

        return false ;
    }

    /**
     * @param Integer $row row
     * @param Integer $column column
     * @param Integer $length length
     * @return Boolean
     */
    function walkBoard($row, $column, $length) {
        // condition that found the last letter
        if($length == strlen($this->word)) return true;

        // conditions to not walk anymore
        if( $row < 0 || $row > $this->rows || 
            $column < 0 || $column > $this->columns ||
            $this->word[$length] != $this->board[$row][$column] ||
            isset($this->path["$row-$column"])
        )  return false;

        // walk this path
        $this->path["$row-$column"] = true ;
        // walking in the for directions
        $hasPath =  $this->walkBoard($row + 1, $column, $length + 1) || 
                    $this->walkBoard($row - 1, $column, $length + 1) ||
                    $this->walkBoard($row, $column + 1 , $length + 1) ||
                    $this->walkBoard($row, $column - 1 , $length + 1) ;

        // unwalk this path
        unset($this->path["$row-$column"]);

        return $hasPath ;

    }
}