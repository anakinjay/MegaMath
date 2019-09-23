<?php
declare(strict_types=1);
namespace MegaMath\NumberPlugins;


use MegaMathNumberInterface;
use MegaMathPluginBase;

final class Binary extends MegaMathPluginBase implements MegaMathNumberInterface
{

    protected function __construct($value)
    {
        parent::__construct($value);
        $this->type = "Binary";
        $this->value = Binary::toDec($value);
    }
    public static function toDec($value)
    {
        return bindec($value);
    }
    public static function fromDec($value)
    {
        return decbin($value);
    }

    public static function matchType($value) {
        return (preg_match('~^[01]+$~', $value));
    }



}