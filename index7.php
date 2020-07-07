<?php

// PHP global keyword example 1

# create or declare global variables x and y
$x = 5;
$y = 10;

function myUpdate() {

    // global keyword is used to access the declared global variables 
    global $x, $y;

    # updating the value of variable x
    $x = $x + $y;

}

// calling a function named myUpdate()
myUpdate();

echo $x; // outputs 15

?>