<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nationality</title>
</head>
<body>


    <form method="get" 
    action="second_php_file.php">


    Country:
    <input type="text" name="country">
    <br>
    Language:
    <input type="text" name="language">
    <br>
    <input type="submit" value="Submit">
    </form>
    <br>
    <p>Your language is: <?=$_GET['language'];?></p>
    <p>Your country is: <?=$_GET['country'];?></p>
    <a href="index28.php">Reset</a>
</body>
</html>