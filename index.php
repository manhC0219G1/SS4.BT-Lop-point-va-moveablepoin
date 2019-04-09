<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "Poin.php";
include "MovablePoin.php";
$point = new Point(5, 5);
$point->setXY(20, 30);
$point->toString();
echo "<hr>";
$moveablePoint = new MoveablePoint(50, 40, 5, 5);
$moveablePoint->setSpeed(2, 2);
$moveablePoint->toString();
echo "<br>";
$moveablePoint->move();
?>
</body>
</html>
