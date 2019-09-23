<?php

class MegaMathPluginBase  {

    public $originalValue;
    public $value;
    public $type;


    protected function __construct($value)
    {
        parent::__construct($value);
        $this->originalValue = $value;
    }
    public function __toString()
    {
        return $this->getValue();

    }
    public function getValue() {
        return $this->value;
    }

    public function getOriginalValue() {
        return $this->originalValue;
    }


    public static function toDec($value)
    {

    }
    public static function fromDec($value)
    {

    }

    public static function matchType($value) {

    }

}