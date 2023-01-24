<?php
declare(strict_types=1);

require 'Rectangle.php';

$rectangleOne = new Rectangle(5, 2);
var_dump($rectangleOne->calculateArea());
var_dump($rectangleOne->calculatePerimeter());


