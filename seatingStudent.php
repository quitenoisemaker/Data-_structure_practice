<?php
function SeatingStudents($arr) {
    $numberOfSeats = array_shift($arr);// it remove the first occurrence and return the value
    $numberOfRows = round($numberOfSeats / 2); //round
    $seat = [];
    

    $idx = 0;// index
    for ($row = 0; $row < $numberOfRows; $row ++) {
        array_push($seat, []); // 
        for ($col = 0; $col < 2; $col ++) {

            $isOccupied = array_search($idx + 1, $arr) > -1 ? true : false;
            array_push($seat[$row], $isOccupied);
            $idx ++;
        }
    }

     $seating = 0;
    for ($i = 0; $i < $numberOfRows - 1; $i++) {
        if (($seat[$i][0] === false) && ($seat[$i][1] === false)) $seating++;
        if (($seat[$i][0] === false) && ($seat[$i + 1][0] === false)) $seating++;
        if (($seat[$i][1] === false) && ($seat[$i + 1][1] === false)) $seating++;
    }
    if (($seat[$numberOfRows - 1][0] == false) && ($seat[$numberOfRows - 1][1] == false)) $seating++;
    return $seating;
    }

    $input = [8, 1, 8];
print_r(SeatingStudents($input));