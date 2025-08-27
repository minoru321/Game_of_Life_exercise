<?php 
//gameoflife_Test.php - To Test the program functions

    require_once '../ALGO/gameoflife.php';

// Test 1 
    echo "Test 1 : Checking Neighbour Count";
    $size = 3;
    $sampleGrid = [
        [0 , 1, 0],
        [1 , 1, 1],
        [0 , 1, 0]
    ];
    $expectNeighbours = 4;
    $result = countLiveNeighbours(1, 1, $size, $sampleGrid);
        if ($result === $expectNeighbours) {
            echo "PASS\n";
        }else {
            echo "FAIL\n";
        }
    echo "------------------------------------------------------------";
    echo PHP_EOL;

// Test 2 
    echo "Test 2 : Checking Rule of the application\n";  
    $nextGenaration = applyRules($sampleGrid,$size);
    printGrid($nextGenaration); // To check vissually print
    echo "------------------------------------------------------------";
    echo PHP_EOL;


// Test 3
    echo "Test 3 : Checking Glider Placement in the start\n"; 
    $grid = array_fill(0, $size, array_fill(0, $size, 0) );
    initializeGrid($grid);
    printGrid($grid);
    echo "------------------------------------------------------------";
    echo PHP_EOL;
 ?>