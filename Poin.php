<?php
class Point
{
    private $x;
    private $y;
    private $arrayXY = [];
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    function getX()
    {
        return $this->x;
    }
    function setX($x)
    {
        $this->x = $x;
    }
    function getY()
    {
        return $this->y;
    }
    function setY($y)
    {
        $this->y = $y;
    }
    function setXY($x, $y)
    {
        array_push($this->arrayXY, $x, $y);
    }
    function getXY()
    {
        // Converter array to string
        return implode(", ",$this->arrayXY);
    }
    function toString()
    {
        echo "Point (x, y): ".$this->getXY();
    }
}
