<?php

    $my_array = array(0, 1, 2, 3, 4);           // array of numbers
    $string_array = array("zero", "one", "two", "three", "four");           // array of strings
    $mixed_array = array("zero", 1, "two", 3, "four");          // array of elements with mixed data type

    echo count($my_array);

    $my_short_array = [0, 1, 2, 3, 4];
    $string_short_array = ["zero", "one", "two", "three", "four"];
    $mixed_short_array = ["zero", 1, "two", 3, "four"];

    $short_standing_array = [
        0,
        1,
        2,
        3,
        4
    ];

    // echo $my_array[2]." = ".$string_array[2]; // outputs 3rd element of array my_array

?>