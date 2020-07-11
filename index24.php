<?php

# the super global variable $GLOBALS example

$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

/*
In the example above, since z is a variable present within the $GLOBALS array, 
it is also accessible from outside the function!
*/
?>