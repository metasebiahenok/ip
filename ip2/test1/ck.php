<?php
define('fivedays',60*60*24*5);
setcookie("name",$_POST["name"],time()+fivedays);

setcookie("height",$_POST["height"],time()+fivedays);
setcookie("color",$_POST["color"],time()+fivedays);

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>cookie tread</title>
<style type="text/css">
label{widt:7em; float:left; }
input{margin-top:3px}</style>
</head><body>
<p>the cookie as been set with the following data </p>
<p>name <?php 
print($_COOKIE["name"])
?>
</p>
<p>height <?php 
print($_COOKIE["height"]);
?></p>
<p>favorite color <span style="color:<?php 
print($_COOKIE["color"]);
?>"><?php 
print($_COOKIE["color"]);
?>
</span>
</p>


<p>click<a href="ck1.php">here</a> for the saved cookie</p>
</body>
</html>