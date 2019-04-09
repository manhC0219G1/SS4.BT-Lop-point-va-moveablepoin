<?php
include_once "Poin.php";
class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;
    private $arrayXYSpeed = [];
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    function getXSpeed()
    {
        return $this->xSpeed;
    }
    function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    function getYSpeed()
    {
        return $this->ySpeed;
    }
    function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    function setSpeed($xSpeed, $ySpeed)
    {
        array_push($this->arrayXYSpeed, $xSpeed, $ySpeed);
    }
    function getSpeed()
    {
        // Converter array to string
        return implode(", ", $this->arrayXYSpeed);
    }
    public function toString()
    {
        $this->setXY($this->getX(), $this->getY());
        $this->getXY();
        echo "Moveable Point: "."<br>";
        parent::toString();
        echo "<br>";
        echo "Moveable speed: ".$this->getSpeed();
    }
    function move()
    {
    }
}