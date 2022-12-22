
<?php
include 'movie1.php';
$movie1 = new Movie('N0001', "The Good Nurse", 6.5);
$movie2 = new Movie('N0002', "Don't Worry Darling", 7.35);

echo $movie1->title.'<br>';
echo $movie1->conversion('Japan').'<br>';

echo $movie2->title.'<br>';
echo $movie2->conversion('UK').'<br>';

echo Movie::DISCOUNT.'<br>';//using class
echo $movie1::DISCOUNT.'<br>';//using object
echo $movie2::DISCOUNT.'<br>';//using object

echo $movie1->id.'<br>';
?>