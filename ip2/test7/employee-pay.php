<!DOCTYPE html>
<html>
<head>
	<title>OOP Example</title>
	<link rel ="stylesheet" type="text/css" href="styles.css"  />
</head>
<body>
<?php
	include("inc-employee-object.php");
  if(isset($_POST['id']) &&isset($_POST['empType'])){
	$id = $_POST["id"];
	$empType = $_POST["empType"];
	if ($empType=="Salaried")
			$emp1 = new SalariedEmployee();
	else 
			$emp1 = new HourlyEmployee();
			
	$emp1->findEmployee($id);

	print ("<p>Weekly Pay for ".$emp1->getFirstName()." ". $emp1->getLastName().": $".$emp1->getWeeklyPay()."</p>");
  }
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>OOP Example</title>
	<link rel ="stylesheet" type="text/css" href="styles.css"  />
</head>
<body>
	<h1>Weekly Pay Calculator</h1>
	<form action="employee-pay-2.php" method="post">
		<input class = "submit" type = "submit" value = "Inheritance Demo">
	</form>
</body>
</html>