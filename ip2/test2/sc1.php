<?php
//session2.php
session_start();
#updating a session variable
$_SESSION['myFavDrink'] = 'Beer';

//echo'<bt> color:'.$_SESSION['myFavColor'];
echo '<BR> Food: '.$_SESSION['myFavFood'];
echo '<BR> Drink: '.$_SESSION['myFavDrink'];
//echo 'Color: '.$_SESSION['myFavColor'];
?>

