<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites</title>
</head>
<body>
    <form method="post">
    Favorite Color:
    <input type="text" name="color">
    <br>
    Favorite Food:
    <input type="text" name="food">
    <br>
    <input type="submit" value="Submit">
    </form>
    <br>
    <p>Best food is: <?=$_POST['food']?></p>
    <p>Best color is: <?=$_POST['color']?></p>
    <a href="index29.php">Reset</a>
</body>
</html>