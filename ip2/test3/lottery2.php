<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<charset "utf-8">
	<title> Lottery </title>
	<link rel = "stylesheet" type = "text/css" href = "sample.css">
</head>

<body>
<?php
	if (isset($_POST['prize']) and isset($_SESSION['fullName']))
	{
	$prize = $_POST['prize'];

	print("<h1>".$_SESSION['fullName'].", you chose:<br> $prize!</h1>");
	print("<p>Bring your ticket to our <strong>".$_SESSION['city']."</strong> store and we will have your prize ready for you!</p>");
	}
	
	session_destroy();
?>
</body>
</html>
