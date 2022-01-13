<?php
class Moveable extends Point
{
    private $xSpeed;
    private $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function move()
    {
        $a=parent::getX();
        $a+= $this->xSpeed;
        $b=parent::getY();
        $b+= $this->ySpeed;

        return $a."   ".$b;

    }

    public function toSing()
    {
        return parent::toSing()."giá trị xSpeed= ".$this->xSpeed." giá trị của ySeep= ".$this->ySpeed;
    }

}