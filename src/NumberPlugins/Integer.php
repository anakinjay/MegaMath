<?php
declare(strict_types=1);
namespace MegaMath\NumberPlugins;


use MegaMathNumberInterface;
use MegaMathPluginBase;

final class Integer extends MegaMathPluginBase implements MegaMathNumberInterface
{    protected function __construct($value)
{
    parent::__construct($value);
    $this->type = "Integer";
    $this->value = Integer::toDec($value);
}
    public static function toDec($value)
    {
        return floatval($value);
    }
    public static function fromDec($value)
    {
        return intval($value);
    }

    public static function matchType($value) {
        return is_numeric($value);
    }

}