<?php
//session1.php
session_start();

print("session Id: " . session_id());
echo "<br>";
print("session Name: " . session_name());
echo "<br>";
echo "Session is Stored at: " . session_save_path();

$_SESSION['myFavFood'] = 'Pizza';
$_SESSION['myFavDrink'] = 'Cola'; 
$_SESSION['myFavColor'] = 'Orange';


echo '<BR>Food:'.$_SESSION['myFavFood'];
echo '<Br> Drink:'.$_SESSION['myFavDrink'];
echo'<br> color:'.$_SESSION['myFavColor'];
#deleting a session variable
unset($_SESSION['myFavColor']);
?>
