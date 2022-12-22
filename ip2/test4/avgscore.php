//average-score.php
<!DOCTYPE html>
<html>

<head>
	<title>AVERAGE SCORE</title>
	<link rel ="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<?php
		$fp=fopen("scores.txt","r");
		if($fp)
		{
			$score1 = trim(fgets($fp));
			$score2 = trim(fgets($fp));
			$score3 = trim(fgets($fp));
			$score4 = trim(fgets($fp));
			$score5 = trim(fgets($fp));

			fclose($fp);
			$avgScore = ($score1 + $score2 + $score3 + $score4 + $score5) / 5;
			print (" <h1>AVERAGE SCORE</h1>");
			print("<p>The average score is $avgScore. </p>");
			print (" <p><a href = \"avgScore.html\">Return to averageScore form</a></p> ");
		}
		else 
		{
			echo 'scores.txt cannot be opened'. "<br>";
		}
		
	?>

</body>
</html>