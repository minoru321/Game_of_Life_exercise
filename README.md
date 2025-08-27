# Game_of_Life_exercise
The universe of the Game of Life is an infinite two-dimensional orthogonal grid of square cells, each of which is in one of two possible states, alive or dead. Every cell interacts with its eight neighbors, which are the cells that are horizontally, vertically, or diagonally adjacent.

# HOW TO GET IN TO LOCAL
Create New folder in local PC
Open CMD inside that folder or navigate to project folder
git clone <repo url>

# HOW TO RUN PROGRAM
Open CMD > php demo.php

# HOW TO RUN TEST
Open CMD > php test.php

# ABOUT TEST CASES:
1. TEST 1 : To check the Neighbour count in below sample grid

        [0 , 1, 0],
        [1 , 1, 1],     we can see Neighbour count expected as 4>> if it's 4 output will be "PASS"
        [0 , 1, 0]

2. TEST 2 : To Check Overpopulation used below sample grid with 4 Neighbours

        [0 , 1, 0],
        [1 , 1, 1],     so, next genaration should be die (*)
        [0 , 1, 0]

3. TEST 3 : To Check Underpopulation used sample grid with 1 Neighbours

        [0 , 0, 0],
        [0 , 1, 0],    so, next genaration should be die (*)
        [0 , 1, 0]

4. TEST 4 : To Check Survival used below sample grid with 2 Neighbours

        [0 , 0, 0],
        [1 , 1, 0],    so, next genaration should be die (*)
        [0 , 1, 0]

5. TEST 5 : To Check Reproduction used below sample grid with 3 Neighbours

        [0 , 0, 0],
        [1 , 0, 1],   so, next genaration should be Live (*) - USed dead cell
        [0 , 1, 0]

6. TEST 6 : To check Edge cell behavor in next genaration user below sample grid

        [1 , 1, 0],
        [0 , 0, 0],  To check crash or behave incorrect. here not crasing working fine.
        [0 , 0, 0]


6. TEST 6 : To Check Glider Placement in the start (Should be center)

        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * @ * * * * * * * * * * * *
        * * * * * * * * * * * * * @ * * * * * * * * * * *
        * * * * * * * * * * * @ @ @ * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *
        * * * * * * * * * * * * * * * * * * * * * * * * *