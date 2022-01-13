<?php
include_once 'Point2D.php';
include_once 'Point3D.php';
$point2d= new Point2D(2,4);
echo $point2d->toSing()."<br>";
echo"<pre>";
    print_r($point2d->getXY())."<br>";

$point3d = new Point3D(5,6,7);
echo $point3d->toSing()."<br>";
echo"<pre>";
print_r($point3d->getXYZ())."<br>";

?>