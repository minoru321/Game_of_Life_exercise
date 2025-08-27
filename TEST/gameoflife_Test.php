<?php 
//gameoflife_Test.php - To Test the program functions

    require_once "./ALGO/gameoflife.php";

// Test 1 
    echo "Test 1 : Checking Neighbour Count\n";
    $sampleGrid = [
        [0 , 1, 0],
        [1 , 1, 1],
        [0 , 1, 0]
    ];
    $expectNeighbours = 4;
    $result = countLiveNeighbours(1, 1, 3, $sampleGrid);
        if ($result === $expectNeighbours) {
            echo " >> PASS << \n";
        }else {
            echo ">> FAIL << \n";
        }
    echo "------------------------------------------------------------";
    echo PHP_EOL;

// Test 2 
    echo "Test 2 : Checking Rule of the application (Neigbours = 4, so center should be die (*)\n";  
    $nextGenaration = applyRules($sampleGrid,3);
    printGrid($nextGenaration); // To check vissually print
    echo "------------------------------------------------------------";
    echo PHP_EOL;


// Test 3
    $grid = array_fill(0, 25, array_fill(0, 25, 0) );
    initializeGrid($grid);
    echo "Test 3 : Checking Glider Placement in the start(Should be center)\n"; 
    printGrid($grid);
    echo "------------------------------------------------------------";
    echo PHP_EOL;
 ?>