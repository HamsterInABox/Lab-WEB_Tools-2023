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

<footer>
<?php
	date_default_timezone_set("Europe/Riga");
	echo date("Y-m-d h:i:sa");
	echo "   ";
   ?>
</footer>
</body>
</html>
