<?php

    // declare a global variable course
    $course_name = "Database";
    $course_code = "IS 099";

    echo "<h1>". $course_code . ": " . $course_name . " is a collection of related data.</h1>";
    echo "<h1> ${course_code}: ${course_name} is a collection of related data.</h1><br>";

    function makeHeaderGreeting($name, $last_name){

    return "<h1>Hello, ${name} ${last_name}!</h1><br>";

    }

    echo makeHeaderGreeting("Salumu", "Madati");

?>