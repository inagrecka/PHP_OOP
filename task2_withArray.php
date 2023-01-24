<?php

declare(strict_types=1);

require 'NumberCalculator(task2-withArray).php';

$numberCalc = new NumberCalculator2();
$numberCalc->addNumber(2);
$numberCalc->addNumber(5);
var_dump($numberCalc->calculateSum());
var_dump($numberCalc->calculateProduct());
var_dump($numberCalc->calculateAverage());