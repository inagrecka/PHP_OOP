<?php

declare(strict_types=1);

require 'NumberCalculator(task2).php';

$numberCalc = new NumberCalculator();
$numberCalc->addNumber(2);
$numberCalc->addNumber(5);
var_dump($numberCalc->calculateSum());
var_dump($numberCalc->calculateProduct());
var_dump($numberCalc->calculateAverage());