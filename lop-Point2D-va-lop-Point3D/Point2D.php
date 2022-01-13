<?php

class Point2D
{
private $x;
private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    public function setX($x): void
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y): void
    {
        $this->y = $y;
    }


public function getXY(){


   return   ( [$this->x,$this->y]);

}

public function toSing(){
        return "giá trị x= ".$this->x." giá trị y = ".$this->y;
}
}