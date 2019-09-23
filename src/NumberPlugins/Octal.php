<?php
declare(strict_types=1);
namespace MegaMath\NumberPlugins;


use MegaMathNumberInterface;
use MegaMathPluginBase;

final class Octal extends MegaMathPluginBase  implements MegaMathNumberInterface
{

    public function __construct($value)
    {
    //    parent::__construct($value);
        $this->type = "Octal";
        $this->value = Octal::toDec($value);
    }
    public static function toDec($value)
    {
        return octdec($value);
    }
    public static function fromDec($value)
    {
        return decoct($value);
    }

    public static function matchType($value) {
        return decoct(octdec($value)) == $value;
    }

}