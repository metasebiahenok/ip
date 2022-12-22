<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>cookie 2</title>

</head>
<body>
<p>the following data is saved on your browser</p>
<?php
foreach($_COOKIE as $key=>$value)
print("$key=$value<br>");
?>
</body>
</html>
