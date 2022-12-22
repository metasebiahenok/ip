<?php
include 'movie1.php';
$movie1 = new Movie('N0001', "The Good Nurse", 6.5);
$movie2 = new Movie('N0002', "Don't Worry Darling", 6.5);

echo $movie1->title.'<br>';
echo $movie1->conversion('Japan').'<br>';

echo $movie2->title.'<br>';
echo $movie2->conversion('UK').'<br>';

$movie1->rentalPrice = -20;
echo "Rental price: ".$movie1->rentalPrice.'<br>';
?>