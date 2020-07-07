<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, $b) {

  return $a + (int)$b;

}

echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown

# PHP Functions - Returning values
function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "<br>5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4) . "<br>";

  # PHP Return Type Declarations
  function addNumbers2(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumbers2(1.2, 5.2)."<br>";

  // You can specify a different return type, than the argument types, but make sure the return is the correct type
  function addNumbers3(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo addNumbers3(1.2, 5.2);
?>