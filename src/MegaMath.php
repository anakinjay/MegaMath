<?php
declare(strict_types=1);


$composer = require __DIR__ . '/../vendor/autoload.php';
use Composer\Autoload\ClassLoader;

final class MegaMath
{
    private $numberPlugins = [];
    private $composer;

    public function __construct(ClassLoader $composer)
    {
        $this->composer = $composer;

        foreach ($this->composer->getClassMap() as $fqcn => $file)
        {

            $namespace = "MegaMath\NumberPlugins";
            $class = str_replace($namespace,'',$fqcn);

            if ((substr($fqcn, 0, strlen($namespace)) == $namespace) && ($class != 'Binary')) {
                $this->composer->loadClass($fqcn);
                require_once($file);
                $this->numberPlugins[] = $fqcn;
            }

        }
    }

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

    public function convertToFloat($value) {
        $class = $this->getNumberPlugin($value);
        return $class::toFloat($value);

    }

    public function getNumberPlugin($value) {

        foreach ($this->numberPlugins as $plugin) {
            if ($plugin::matchType($value)) {
                return $plugin;
            }
        }
        return false;
    }










}