<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in HTML</title>
</head>
<body>

<h1>My First PHP Site</h1>
<p>This HTML will get delivered as is</p>


<?php 

/* 
A PHP script is executed on the server, 
and the plain HTML result is sent back to the browser. 
*/
echo "<p>But this code is interpreted by PHP and turned into HTML</p>";

?>

<?php

// Any HTML tag can be used
echo "<ul><li>You can use any HTML tags,</li><li>like this list.</li></ul>";

?>

<footer>
  <p>And this code is back in plain HTML</p>
</footer>

</body>
</html>