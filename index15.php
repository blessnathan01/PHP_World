<?php

// PHP Constants example

# create a constant with a case-sensitive name
define("GREETING", "Welcome to PHP!"); // by default, case-insensitive is false

echo GREETING."<br>";

function myTest() {
    echo GREETING." (within the function)<br>";
  }

  myTest();

// create a constant with a case-insensitive name
define("GREETING", "Welcome to PHP world!", true); // doesn't matter if the name is in upper or lower case

echo greeting."<br>";

# create an array constant with a case-sensitive name
define("cars", [
    "Nissan",
    "Suzuki",
    "Toyota"
  ]);

  echo cars[0]."<br>";

  # create an array constant with a case-insensitive name
define("fruits", [
    "apple",
    "mango",
    "orange"
], true);

  echo FRUITS[0];

?>