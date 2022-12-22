//movieDemo3.php
<?php
include 'movie3.php';
$movie1 = new Movie('N0001', "The Good Nurse", 6.5);
$movie2 = new Movie('N0002', "Don't Worry Darling", 7.35);

echo "<br>".$movie1->getId().'<br>';
echo $movie1->title.'<br>';
echo $movie1->rentalPrice.' rent movie 1<br>';
echo $movie1->conversion('Japan').'<br>';

echo $movie2->getId().'<br>';
echo $movie2->title.'<br>';
echo $movie2->conversion('UK').'<br>';

echo $movie1->id.'movie 1 id <br>';
echo $movie1->getId(). 'movie 1 get id<br>';
//modification
$movie2->setId('N0003');
echo $movie2->getId(). 'after modifi movie 2 id and uses get id funs<br>';
//echo $movie1->id.'<br>';

echo $movie1->rentalPrice.'<br>';
$movie1->rentalPrice = -20;
echo $movie1->rentalPrice.' after modif <br>';

$movie1->setRentalPrice(8);
echo $movie1->rentalPrice.'<br>';

?>
