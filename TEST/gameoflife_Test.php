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
    echo PHP_EOL;usleep(500000);

// Test 2 
    echo "Test 2 : Check Overpopulation (with 4 Neigbours  > center should  Die(*) \n\n";  
    $nextGenaration = applyRules($sampleGrid,3);
    printGrid($nextGenaration); // To check vissually print
    echo "------------------------------------------------------------";
    echo PHP_EOL;usleep(500000);

//Test 3
    echo "Test 3: Check Underpopulation - With 1 Neigbours > center should Die(*) \n\n";
    $underpopGrid = [
        [0 , 0, 0],
        [0 , 1, 0],
        [0 , 1, 0]
    ];
    $underpopNext = applyRules($underpopGrid,3);
    printGrid($underpopNext);
    echo "------------------------------------------------------------";
    echo PHP_EOL;usleep(500000);

// Test 4
    echo "Test 4: Check Survival - With 2 Neigbours > center should Live(@) \n\n";
    $surviveGrid = [
        [0 , 0, 0],
        [1 , 1, 0],
        [0 , 1, 0]
    ];
    $surviveNext = applyRules($surviveGrid,3);
    printGrid($surviveNext);
    echo "------------------------------------------------------------";
    echo PHP_EOL;usleep(500000);


// Test 5
    echo "Test 5: Check Reproduction - With 3 Neigbours > center should Live(@) (Center was Dead cel) \n\n";
    $reproductGrid = [
        [0 , 0, 0],
        [1 , 0, 1],
        [0 , 1, 0]
    ];
    $reproductNext = applyRules($reproductGrid,3);
    printGrid($reproductNext);
    echo "------------------------------------------------------------";
    echo PHP_EOL;usleep(500000);

// Test 6
    echo "Test 5: Checking Edge cell behavor\n\n";
    $edgeGrid = [
        [1 , 1, 0],
        [0 , 0, 0],
        [0 , 0, 0]
    ];
    $edgeNext = applyRules($edgeGrid,3);
    printGrid($edgeNext);
    echo "------------------------------------------------------------";
    echo PHP_EOL;usleep(500000);

// Test 7
    $grid = array_fill(0, 25, array_fill(0, 25, 0) );
    initializeGrid($grid);
    echo "Test 7 : Checking Glider Placement in the start(Should be center)\n\n"; 
    printGrid($grid);
    echo "------------------------------------------------------------";
    echo PHP_EOL;
 ?>