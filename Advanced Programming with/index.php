<?php
include_once 'Point.php';
include_once 'Moveable.php';

$point= new Point(2,4);
echo "<pre>";
print_r($point->getXY());
echo "<br>";
echo $point->toSing()."<br>";

$moveA= new Moveable(2,4,5,7);
echo $moveA->move()."<br>";

echo $moveA->toSing();
?>
