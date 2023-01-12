<?php

class Solution {

    /**
     * grid matrix
     */
    private $grid;

    /**
     * rows
     */
    private $rows = 0;

    /**
     * columns
     */
    private $columns = 0;

    /**
     * visited hash set
     */
    private $visited ;

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
        $this->grid = $grid;
        $this->rows = count($grid);
        $this->columns = count($grid[0]);
        $this->visited = [];

        $islands = 0;

        // going to all positions and check the first letter and the walk recursive
        for($row = 0; $row < $this->rows; $row++){
            for($column = 0; $column < $this->columns; $column++){
                if($this->grid[$row][$column] == 1 && !isset($this->visited["$row-$column"])){
                    $islands++ ;
                    $this->markLands($row, $column);
                }
            }
        }

        return $islands;

    }

    /**
     * @param Integer $row row
     * @param Integer $column column
     * @return Boolean
     */
    function markLands($row, $column) {
        // conditions to skip the row and column
        if(
            isset($this->visited["$row-$column"]) ||
            $row > $this->rows || $row < 0 ||
            $column > $this->columns || $columns < 0 ||
            $this->grid[$row][$column] == 0
        ) {
            return;
        }

        $this->visited["$row-$column"] = true ;

        // mark edges
        $this->markLands($row + 1, $column);
        $this->markLands($row - 1, $column);
        $this->markLands($row, $column + 1);
        $this->markLands($row, $column - 1);
    }
}