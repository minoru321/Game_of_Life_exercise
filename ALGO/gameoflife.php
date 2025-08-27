<?php
    // Implementation of Conway's Game of life Using PHP (Console Running)

    $size = 25; # To Diffine the size of the grid( 25x25 cell universe )
    $grid = array_fill(0, $size, array_fill(0, $size, 0) ); # Filling $size * $size full matrix with 0 (All dead cells)
    

    // Starting Glider pattern Display (Shoud be middle of the 25 * 25 metrix )
    function initializeGrid(&$grid){
        $centralX = 12;
        $centralY = 12;
    
        $grid[$centralX - 1][$centralY] = 1;
        $grid[$centralX][$centralY + 1] = 1;
        $grid[$centralX + 1][$centralY - 1] = 1;
        $grid[$centralX + 1] [$centralY] = 1;
        $grid[$centralX + 1][$centralY + 1] = 1;
    
    }

    // Print the full grid
    function printGrid($grid){
        foreach ($grid as $row){
            foreach($row as $cell){
                if($cell) {
                    echo " @"; //live cell
                }else{
                    echo " *"; // dead cell
                }
            }
            echo PHP_EOL;
        }
    }

    // Count the Live Neighbours
    function countLiveNeighbours($x, $y, $size, $grid){
        $count = 0;  #for start all 0 live Neighbours(as all dead)
        for ($i = -1;$i <= 1 ;$i++) {
            for ($j = -1; $j <= 1 ; $j++){
                if($i === 0 && $j === 0 ) continue; # we are caring about Neighbours (So skip center cell > [2][2]) 
                $newX =$x + $i ;
                $newY =$y + $j ;
                    if($newX >= 0 && $newY >= 0 && $newX < $size && $newY < $size){ # To check cell is within the univers
                            $count = $count + $grid[$newX][$newY]; 
                    }
                }          
             }
        return $count;
    }

    // Apply rules
    function applyRules($grid,$size) {
        $newGrid = array_fill(0,$size,array_fill(0,$size,0)); # Filling new grid $size * $size full metrix with 0 (All dead cells)
        for($x = 0; $x < $size ; $x++){
            for($y = 0; $y < $size ; $y++){
                $neighbours = countLiveNeighbours($x, $y, $size, $grid);
                // Rule 1 : Underpopulation 
                if($grid[$x][$y] === 1 &&  $neighbours < 2) { 
                    $newGrid[$x][$y] = 0 ;
                } 
                // Rule 2 : Survival
                elseif ($grid[$x][$y] === 1 &&($neighbours === 2 || $neighbours === 3) ) {   
                    $newGrid[$x][$y] = 1 ;
                }
                // Rule 3 : Overcrowding
                elseif ($grid[$x][$y] === 1 && ($neighbours > 3)) {
                    $newGrid[$x][$y] = 0 ;
                }
                // Rule 4 : Reproduction
                elseif ($grid[$x][$y] === 0 && ($neighbours === 3)) {
                    $newGrid[$x][$y] = 1 ;
                }else {
                    $newGrid[$x][$y] = 0 ;
                }
            }
        }
    return $newGrid;
}



 initializeGrid($grid);


// Run the functions
for($tick = 1; $tick < 10; $tick++){
    echo "Genaration $tick\n";
    printGrid($grid);
    $grid = applyRules($grid,$size);
    usleep(500000); // for deley 0.5 sec
    echo "\n";
}

?>