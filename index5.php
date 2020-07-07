<?php

# PHP Variable with global scope example

$x = 5; // global scope

function myTest() {

  // using variable x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";

}

// calling a function named myTest()
myTest();

# using variable x outside function myTest will yield 5
echo "<p>Variable x outside function is: $x</p>";

?>