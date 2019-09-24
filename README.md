![alt text](https://repository-images.githubusercontent.com/207891140/86a50000-d4aa-11e9-9d6d-b2fa580c7a87 "Logo Title Text 1")

### Purpose
This framework is a set of very simple math operations that handle basic math functionality, plus conversion between different number types.  Currently supported number types are:
- Integer
- Floating
- Hex
- Binary
- Octal

### Requirements
- PHP version >= 7.2
- [Composer dependency manager](https://getcomposer.org/)

### Basic Usage
All MegaMath operations work on the concept of coverting to decimal, performing the operation, then outputting in the desired format. Format defaults to floating.

All functions follow this format:

**$megaMathInstance->operation([param 1], [param 2 if needed], [output type - optional defaults to float]); **

### Usage Examples
```php
<?php
use MegaMath\NumberPlugins\Octal;
use MegaMath\NumberPlugins\Hex;

$composer = require __DIR__ . '/vendor/autoload.php';
$math = new MegaMath();

//Addition
echo $math->add(2,2);

//Multiplication with output type of Hex
echo $math->multiply(2.776,7.876, "Hex");

//Subtraction with conversion from Octal
echo $math->subtract(Octal::toDec(144),4);

//Division with conversion from Octal and conversion from Hex
echo $math->divide(Octal::toDec(145),Hex::toDec(32));

//Square Root with conversion from Binary, and output type of Binary
echo $math->sqroot(Binary::toDec(146), "Binary");

//Exponent
echo $math->exponent(77);

//Power
echo $math->power(3,4);


```

### Plugin System
MegaMath uses a plugin system to handle the various conversions between number types. To create your own Number Plugin, place the file in **src/NumberPlugins** and implement the **MegaMathNumberInterface**. MegaMath will automatically detect the new plugin using composer, and make your plugin available as an output type.

### Unit Tests
23 unit assertion tests are included for the MegaMath class and the included Number Plugins. To run these tests run the following command:
```
composer test
```
