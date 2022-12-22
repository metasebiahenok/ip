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
	$_SESSION['fullName'] = $_POST['fullName'];
	$_SESSION['city'] = $_POST['city'];
	$ticketNum = $_POST['ticketNum'];
if (isset($_POST['fullName'])){
	
	if ($ticketNum == "45678")
	{
		print("<h1>".$_SESSION['fullName'].", you won!!</h1>");
		print("<form action = \"lottery2.php\" method = \"post\" >
				<label>Choose a prize: 
				<select name = \"prize\"> 
				<option>New TV</option>
				<option>New Laptop</option>
				<option>A New Refrigerator</option>
				</select></label>
			<input class = \"submit\" type = \"submit\" value = \"How to Collect Your Prize\">
			</form>");
	}
	else{ 
		print("<h1>Sorry ".$_SESSION['fullName'].", you didn't win anything - better luck next time..</h1>");
	}}
	else{
		Print("name is not entered");
	}?>	
</body>
</html>
