<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables - Case Sensitive</title>
</head>
<body>

    <?php

    $color = "red";

    # Only the first statement will display the value of the $color variable!
    echo "My car is " . $color . "<br>";

    echo "My house is " . $COLOR . "<br>";

    echo "My boat is " . $coLOR . "<br>";

    ?>

</body>
</html>