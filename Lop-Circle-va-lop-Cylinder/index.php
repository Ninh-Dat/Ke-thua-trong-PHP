<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle=new Circle(2,"blue");

echo $circle->toString()."<br>";
echo"Diện tích hình tròn = ". $circle->areaCircle()."<br>";


$cylinder=new Cylinder(3,"black",2);
echo $cylinder->toString()."<br>";
echo "Thể tích hình trụ = ".$cylinder->areaCylinder();
?>