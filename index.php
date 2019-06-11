<?php
include_once 'Resizeable.php';
include_once 'Circles.php';
include_once 'Rectangle.php';
include_once 'Square.php';
include_once 'ResizeCircle.php';
include_once 'ResizeRectangle.php';
include_once 'ResizeSquare.php';
$circle = new ResizeCircle('hello',4);
$rectangle = new ResizeRectangle(4,5);
$square = new ResizeSquare(6);
var_dump($circle ->resize($circle));
echo "<br>";
var_dump($rectangle ->resize($rectangle));
echo "<br>";
var_dump($square ->resize($square));