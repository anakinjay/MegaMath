<?php
declare(strict_types=1);
namespace MegaMath\NumberPlugins;

use MegaMathNumberInterface;
use MegaMathPluginBase;

final class Floating extends MegaMathPluginBase implements MegaMathNumberInterface
{    protected function __construct($value)
{
    parent::__construct($value);
    $this->type = "Floating";
    $this->value = Floating::toDec($value);
}
    public static function toDec($value)
    {
        return $value;
    }
    public static function fromDec($value)
    {
        return floatval($value);
    }

    public static function matchType($value) {
        return is_float($value);
    }

}