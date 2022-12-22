<!DOCTYPE html>

<html>
<head>
	<title>OOP Example</title>
	<link rel ="stylesheet" type="text/css" href="styles.css"  />
</head>
<body>
<?php
	include("inc-employee-object.php");

	$emp1 = new HourlyEmployee();
	$emp2 = new SalariedEmployee();
	$emp3 = new HourlyEmployee();
	$emp4 = new SalariedEmployee();
    print("id ". $emp1->getID());     
	$emp1->findEmployee(1);
	$emp2->findEmployee(2);
	$emp3->findEmployee(3);
	$emp4->findEmployee(4);	

	print ("<p>Weekly Pay for ".$emp1->getFirstName()." ". $emp1->getLastName().": $".$emp1->getWeeklyPay()."</p>");
	print ("<p>Weekly Pay for ".$emp2->getFirstName()." ". $emp2->getLastName().": $".$emp2->getWeeklyPay()."</p>");
	print ("<p>Weekly Pay for ".$emp3->getFirstName()." ". $emp3->getLastName().": $".$emp3->getWeeklyPay()."</p>");
	print ("<p>Weekly Pay for ".$emp4->getFirstName()." ". $emp4->getLastName().": $".$emp4->getWeeklyPay()."</p>");

?>
</body>
</html>
