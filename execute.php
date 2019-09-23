<?php


use MegaMath\NumberPlugins\Octal;
use MegaMath\NumberPlugins\Hex;

$composer = require __DIR__ . '/vendor/autoload.php';

$math = new MegaMath($composer);
echo $math->add(2,2);
echo "\n";
echo $math->multiply(2.34234234234343242342342342342342342342342343242342,7.4323429034823847928374928374928374928734982734982734);
echo "\n";
echo $math->subtract(Octal::toDec(144),4);
echo "\n";
echo $math->divide(Octal::toDec(145),Hex::toDec(32));
echo "\n";
echo $math->sqroot(Octal::toDec(146));
echo "\n";
echo $math->exponent(77);
echo "\n";
echo $math->power(3,4);



