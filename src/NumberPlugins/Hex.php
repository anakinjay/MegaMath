<?php
declare(strict_types=1);
namespace MegaMath\NumberPlugins;


use MegaMathNumberInterface;
use MegaMathPluginBase;

final class Hex extends MegaMathPluginBase implements MegaMathNumberInterface {


   protected function __construct($value)
        {
            parent::__construct($value);
            $this->type = "Hex";
            $this->value = Hex::toFloat($value);
        }


    public static function toDec($value)
    {
        return hexdec($value);
    }
    public static function fromDec($value)
    {
        return dechex($value);
    }

    public static function matchType($value) {
        return ctype_xdigit($value);
    }

 
}