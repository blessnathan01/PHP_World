<?php

// PHP global keyword example 2

# create or declare global variables x and y
$x = 5;
$y = 10;

function myUpdate() {

  /*
  * array named $GLOBALS['var_name'] is used to access the declared global variables
  * updating the value of variable y
  */
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];

}

// calling a function named myUpdate()
myUpdate();

echo $y; // outputs 15

?>