<!DOCTYPE html>
<html>
<head>
<title> Hi </title>

<style>
footer {
  text-align: center;
  padding: 3px;
  background-color: DarkBlue;
  color: white;
}
</style>
</head>

<body>
<?php
// define variables and set to empty values
$name = $sname = $dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["sname"]);
  $website = test_input($_POST["dob"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form</h2>
<form method="post" action="">  
  Name: <input type="text" name="name">
  <br><br>
  Surname : <input type="text" name="sname">
  <br><br>
  Data of Birth: <input type="text" name="dob">
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $sname;
echo "<br>";
echo $dob;
?>


<footer>
<?php
	date_default_timezone_set("Europe/Riga");
	echo date("Y-m-d h:i:sa");
	echo "   ";
   ?>
</footer>
</body>
</html>
