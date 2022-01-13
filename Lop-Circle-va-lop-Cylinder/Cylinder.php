<?php

class Cylinder extends Circle
{
public $height;

    public function __construct($radius,$color,$height)
    {
        parent::__construct($radius,$color);
        $this->height = $height;
    }
    public function toString()
    {

        return parent::toString()."  Chiều cao = ".$this->height;
    }

public function areaCylinder(){
return parent::areaCircle()*$this->height;
}
}