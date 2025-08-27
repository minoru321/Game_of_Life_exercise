<?php 

// demo.php >> To run the program

require_once "ALGO/gameoflife.php";

    $size = 25; # To Diffine the size of the grid( 25x25 cell universe )
    $generation = 10; # To diffine a generation count
    $grid = array_fill(0, $size, array_fill(0, $size, 0) ); # Filling $size * $size full matrix with 0 (All dead cells)
    
initializeGrid($grid);

// Run the functions
for($tick = 1; $tick < $generation; $tick++){
    echo "Genaration $tick\n";
    printGrid($grid);
    $grid = applyRules($grid,$size);
    usleep(500000); // for deley 0.5 sec
    echo "\n";
}



?>