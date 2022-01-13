<?php

class Point3D extends Point2D
{

private $z;

    public function __construct($x,$y,$z)
    {
        parent::__construct($x,$y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z): void
    {
        $this->z = $z;
    }
public function getXYZ(){
        $arr=parent::getXY();
        $arr[]=$this->z;
        return $arr;
}
public function toSing()
{
    return parent::toSing()." giá trị của z = ".$this->z;
}
}