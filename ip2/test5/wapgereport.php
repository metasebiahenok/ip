//wage-report1.php
<!DOCTYPE html>

<html>
<head>
	<title>EMPLOYEE WEEKLY WAGE REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<?php
		$timesheetFile =fopen("timesheet.txt","r");

		$employeeRecord = trim(fgets($timesheetFile));

		fclose($timesheetFile);

		list($firstName, $lastName, $hours, $payRate) = explode (":", $employeeRecord);

		$pay = $hours * $payRate;

		print ("<h1>EMPLOYEE WEEKLY WAGE REPORT </h1>");

		print("<p>$lastName, $firstName: $$pay.</p>");

		print (" <p><a href = \"wapgereport.html\">Return to Wage Report 1 form</a></p> ");
	?>
</body>
</html>