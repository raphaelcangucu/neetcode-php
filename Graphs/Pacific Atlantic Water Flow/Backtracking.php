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
     * pacific ocean hash set
     */
    private $pacific = [] ;

    /**
     * atlantic ocean hash set
     */
    private $atlantic = [] ;

    /**
     * @param Integer[][] $heights
     * @return Integer[][]
     */
    function pacificAtlantic($heights) {
        $this->grid = $heights;
        $this->rows = count($heights);
        $this->columns = count($heights[0]);

        // for this algorith we will gonna walk in the border columns to see if they reach the another ocean
        for($column = 0; $column < $this->columns; $column++){
            $this->waterFlow(0, $column, $this->pacific, $this->grid[0][$column]);        
            $this->waterFlow($this->rows - 1, $column, $this->atlantic, $this->grid[$this->rows - 1][$column]);
        }

        // than we will gonna walk in the border rows, to see if they reach the another ocean
        for($row = 0; $row < $this->rows; $row++){
            $this->waterFlow($row, 0, $this->pacific, $this->grid[$row][0]);        
            $this->waterFlow($row, $this->columns - 1, $this->atlantic, $this->grid[$rows][$this->column - 1]);
        }
        
        // going to all positions and check if row column set reach both of pacific and atlantic oceans
        $list = [];
        for($row = 0; $row < $this->rows; $row++){
            for($column = 0; $column < $this->columns; $column++){
                if(isset($this->pacific["$row-$column"]) && isset($this->atlantic["$row-$column"])){
                    $list[] = [$row, $column];
                }
            }
        }

        return $list ;
    }

    /**
     * @param Integer $row
     * @param Integer $column
     * @return Boolean
     */
    function waterFlow($row, $column, & $ocean, $prevHeight) {
        // there is no need to visit again in all conditions below
        if(
            isset($ocean["$row-$column"]) ||
            $row < 0 || $row == $this->rows ||
            $column < 0 || $column == $this->columns ||
            $this->grid[$row][$column] < $prevHeight
        )
            return ;

        $ocean["$row-$column"] = true ;

        // visit all directions
        $this->waterFlow($row + 1, $column, $ocean, $this->grid[$row][$column]);
        $this->waterFlow($row - 1, $column, $ocean, $this->grid[$row][$column]);
        $this->waterFlow($row, $column + 1, $ocean, $this->grid[$row][$column]);
        $this->waterFlow($row, $column - 1, $ocean, $this->grid[$row][$column]);
    }
}