<?php
declare(strict_types=1);

use Composer\Autoload\ClassLoader;






final class MegaMath
{

    public function translate($val) {
        if (is_object($val) && (in_array('MegaMathNumberInterface',class_implements($val)))) {
            return  $val->value;

        } else {
            return $val;
        }

    }
    public function add($a,$b, $outputType = 'Floating') {
        $a = $this->translate($a);
        $b = $this->translate($b);
        $class = 'MegaMath\NumberPlugins\\'.$outputType;
        return $class::fromDec($a+$b);
    }
    public function multiply($a,$b, $outputType = 'Floating') {
        $a = $this->translate($a);
        $b = $this->translate($b);
        $class = 'MegaMath\NumberPlugins\\'.$outputType;
        return $class::fromDec($a*$b);
    }
    public function divide($a,$b, $outputType = 'Floating') {
        $a = $this->translate($a);
        $b = $this->translate($b);
        $class = 'MegaMath\NumberPlugins\\'.$outputType;
        return $class::fromDec($a/$b);
    }
    public function subtract($a,$b, $outputType = 'Floating') {
        $a = $this->translate($a);
        $b = $this->translate($b);
        $class = 'MegaMath\NumberPlugins\\'.$outputType;
        return $class::fromDec($a-$b);
    }
    public function sqroot($a, $outputType = 'Floating') {
        $a = $this->translate($a);
        $class = 'MegaMath\NumberPlugins\\'.$outputType;
        return $class::fromDec(sqrt($a));
    }
    public function exponent($a, $outputType = 'Floating') {
        $a = $this->translate($a);
        $class = 'MegaMath\NumberPlugins\\'.$outputType;
        return $class::fromDec(exp($a));
    }
    public function power($a, $b, $outputType = 'Floating') {
        $a = $this->translate($a);
        $b = $this->translate($b);
        $class = 'MegaMath\NumberPlugins\\'.$outputType;
        return $class::fromDec(pow($a,$b));
    }



}