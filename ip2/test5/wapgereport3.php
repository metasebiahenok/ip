//wage-report3.php
<!DOCTYPE html>

<html>
<head>
	<title>EMPLOYEE WEEKLY WAGE REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php
	$timesheetFile =fopen("timesheet.txt","r");

	$emp1 = trim(fgets($timesheetFile));
	$emp2 = trim(fgets($timesheetFile));
	$emp3 = trim(fgets($timesheetFile));

	fclose($timesheetFile);

	list($firstName1, $lastName1, $hours1, $payRate1) = explode (":", $emp1);
	list($firstName2, $lastName2, $hours2, $payRate2) = explode (":", $emp2);
	list($firstName3, $lastName3, $hours3, $payRate3) = explode (":", $emp3);

	$pay1 = $hours1 * $payRate1;
	$pay2 = $hours2 * $payRate2;
	$pay3 = $hours3 * $payRate3;

	$totalPay = 	$pay1 + $pay2 + $pay3;

	$reportFile =fopen("wage-report.txt","w");

	fputs($reportFile, " EMPLOYEE WEEKLY WAGE REPORT \n\n");

	fputs($reportFile, "$firstName1, $lastName1: $ $pay1.\n");
	fputs($reportFile, "$firstName2, $lastName2: $ $pay2.\n");
	fputs($reportFile, "$firstName3, $lastName3: $ $pay3.\n\n");
	fputs($reportFile, "TOTAL PAY: $ $totalPay.\n");
	fclose($reportFile);

	print("<p>The wage report has been written to the
		<strong>wage-report.txt</strong> file");

	print (" <p><a href = \"wapgereport3.html\">Return to Wage Report 3 form</a></p> ");
?>

</body>
</html>
