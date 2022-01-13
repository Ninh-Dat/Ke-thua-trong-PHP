<?php

class Circle
{
    private $radius;
    private $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }
public function toString(){
        return "Radius = ". $this->radius."  Màu = ".$this->color;
}
public function areaCircle(){
        return pi() * pow($this->radius,2);
}
}