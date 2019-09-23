<?php

/**
 * Interface MegaMathNumber
 * @property originalValue
 * @property type
 */
interface MegaMathNumberInterface
{

    public static function toDec($value);
    public static function matchType($value);
    public static function fromDec($value);

}

