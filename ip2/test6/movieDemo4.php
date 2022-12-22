
<?php

include 'movie4.php';

$movie1 = new Movie('N0001', "The Good Nurse", 6.5);
$movie2 = new Movie('N0002', "Don't Worry Darling", 7.35);


echo $movie1->title.'<br>';
echo $movie1->conversion('Japan').'<br>';

echo $movie2->title.'<br>';
echo $movie2->conversion('UK').'<br>';

echo $movie1->id.'id <br>';


//echo $movie1->id.' without func <br>';
echo $movie1->getId()." func <br>";

$movie1->rentalPrice = -20;
echo $movie1->rentalPrice.' rent pr without fun<br>';

echo "<h1> movie1 Object Info: </h1> ".$movie1;
echo "<h1> movie2 Object Info: </h1> ".$movie2;



?>









//movieDemo4.php