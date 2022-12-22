//write-score.php
<!DOCTYPE html>
<html>
<head>
	<title>Save Your Scores</title>
	<link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$score1 = $_POST['score1'];
		$score2 = $_POST['score2'];
		$score3 = $_POST['score3'];
		$score4 = $_POST['score4'];
		$score5 = $_POST['score5'];	
		
		$fp = fopen("my-scores.txt","w");
		if($fp)
		{
			echo '<br>File pointer is at top '.ftell($fp). " bytes". "<br>";
			echo '<br>first value has'.strlen($score1). " bytes". "<br>";
			echo '<br>second value has'.strlen($score2). " bytes". "<br>";
			$bytes = fputs($fp, "$score1\n");
			echo 'File pointer is at 2nd '.ftell($fp). " bytes". "<br>";
			fputs($fp, "$score2\n");
			echo 'File pointer is at 3rd '.ftell($fp). " bytes". "<br>";
			fputs($fp, "$score3\n");
			echo 'File pointer is at 4th '.ftell($fp). " bytes". "<br>";
			fputs($fp, "$score4\n");
			echo 'File pointer is at 5th '.ftell($fp). " bytes". "<br>";
			fputs($fp, "$score5\n");
			echo 'File pointer is at bottom'.ftell($fp). " bytes". "<br>";
			$filename = 'my-scores.txt';
			echo $filename . ' has : ' . filesize($filename) . ' bytes <br>';
			fclose($fp);

			if($bytes)
			{
				print( 5 * $bytes. " bytes written");
				print (" <h1>The following scores have been stored in my-scores.txt:</h1>");
				
				print("<p>$score1<br>$score2<br>$score3<br>$score4<br>$score5</p>");
				print (" <p><a href = \"writescore.html\">Return to Write Scores form</a></p> ");
			}
			else
			{
				echo 'file not written'."<br>";
			}
			
		}
		
	?>
</body>
</html>