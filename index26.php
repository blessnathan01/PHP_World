<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
/*
    When a user submits the data by clicking on "Submit",
    the form data is sent to the file specified in the action
    attribute of the <form> tag.
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo "Submitted name: " . "<strong>${name}</strong>";
  }
}
?>

</body>
</html>