<html>
<body>

<h1>index30.php</h1>
<h2>Superglobals:</h2>

$_REQUEST:
<?php print_r($_REQUEST)?>
<br>

$_GET:
<?php print_r($_GET)?>
<br>

$_POST:
<?php print_r($_POST)?>

<h2>Forms:</h2>

/*
A form using the GET method, 
which is submitted and handled by handle_get_30.php.
*/
<form method="get" action="handle_get_30.php">
GET Form: <input type="text" name="get_name">
<input type="submit" value="Submit GET">
</form>

/*
A form using the POST method, 
which is submitted back to the same file (no action attribute).
*/
<form method="post">
POST Form: <input type="text" name="post_name">
<input type="submit" value="Submit POST">
</form>

/*
Use the two above forms to check your understanding 
of how PHP handles the form inputs.
*/

<a href="index30.php">Reset</a>

</body>
</html>