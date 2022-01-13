<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";


$circle=new Circle("Hình tròn ",3);
echo 'Diện tích hình tròn = '. $circle->calculateArea()."<br>";
echo 'Chu vi hình tròn = '.$circle->calculatePerimeter()."<br>";



$cylinder = new Cylinder('Hình trụ', 3, 4);
echo 'Diện tích hình trụ = ' . $cylinder->calculateArea() . '<br />';
echo 'Chu vi hình trụ = ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Hình chữ nhật', 3, 4);
echo 'Diện tích hình chữ nhật = ' . $rectangle->calculateArea() . '<br />';
echo 'Chu vi hình chữ nhật = ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Hình vuông', 4);
echo 'Diện tích hình vuông = ' . $square->calculateArea() . '<br />';
echo 'Chu vi hình vuông = ' . $square->calculatePerimeter() . '<br />';
?>