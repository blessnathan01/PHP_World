<?php

// check if the variable is numeric 

$x = 5985;
var_dump(is_numeric($x)); # returns a boolen value

echo "<br>";

$x = "5985";
var_dump(is_numeric($x)); # returns a boolen value

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x)); # returns a boolen value

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x)); # returns a boolen value
?>  