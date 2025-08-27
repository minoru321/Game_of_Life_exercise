<?php
    // Implementation of Conway's Game of life Using PHP (Console Running)

    $size = 25; # To Diffine the size of the grid( 25x25 cell universe )
    $grid = array_fill(0, $size, array_fill(0, $size, 0) ); # Filling $size * $size full matrix with 0 (All dead cells)
    

    // Starting Glider pattern Display 
    function initializeGrid($grid){
        $grid[1][2] = 1;
        $grid[1][2] = 1;
        $grid[1][3] = 1;
        $grid[2][3] = 1;
        $grid[3][2] = 1;
    }

    // Print the full grid
    function printGrid($grid){
        foreach ($grid as $row){
            foreach($row as $cell){
                if($cell) {
                    echo "0"; //live cell
                }else{
                    echo "*"; // dead cell
                }
            }
        }
    }


#initializeGrid($grid);
#printGrid($grid);

?>