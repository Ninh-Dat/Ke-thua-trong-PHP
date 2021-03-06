<?php

class Triangle
{
    private $side1;
    private $side2;
    private $side3;
    private $CC;
    private $color;

    public function __construct($side1, $side2, $side3, $CC, $color)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->CC = $CC;
        $this->color = $color;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function setSide1($side1): void
    {
        $this->side1 = $side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function setSide2($side2): void
    {
        $this->side2 = $side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function setSide3($side3): void
    {
        $this->side3 = $side3;
    }

    public function getCC()
    {
        return $this->CC;
    }

    public function setCC($CC): void
    {
        $this->CC = $CC;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function Color()
    {
        return $this->color;
    }

    public function getArea()
    {
        return ($this->side1 * $this->CC) / 2;
    }

    public function getPerimeter()
    {
        return  ($this->side1 + $this->side2 + $this->side3);
    }

    public function toSing(){
        return "Màu = ".$this->Color()." Diện tích = ".$this->getArea()." Chu vi tam giác = ".$this->getPerimeter();
    }

}