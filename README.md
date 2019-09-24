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
All MegaMath operations work on the concept of converting to decimal, performing the operation, then outputting in the desired format. Format defaults to floating.

All functions follow this format:

**$megaMathInstance->operation([param 1], [param 2 if needed], [output type - optional defaults to float]);**

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
MegaMath uses a plugin system to handle the various conversions between number types. All plugins have the following methods available for use:

- static **toDec** - converts the plugin number type input to a decimal
- static **fromDec** - converts a decimal into the plugin number type
- static **matchType** - determines if the input matches the plugin number type. **This can return false positives**. For example, 1001011010 will match both Binary and Integer.

You can also create an instance of a particular Number Plugin if needed. Example:
```php
<?php
$binary = new Binary(10110101);

```

Creating an instance of the class opens up the following non-static methods
```php
<?php
$binary = new Binary(10110101);

//Get the value pre-converted to a decimal
$decimalValue = $binary->getValue();

//Get the original input value before conversion
$originalValue = $binary->getOriginalValue();

//Use PHP's magic __toString() method to output the binary value as a string.
echo $binary;

```

To create your own Number Plugin, place the file in **src/NumberPlugins** and implement the **MegaMathNumberInterface** and extend the **MegaMathPluginBase** class. MegaMath will automatically detect the new plugin using composer, and make your plugin available as an output type.

### Unit Tests
23 unit assertion tests are included for the MegaMath class and the included Number Plugins. To run these tests run the following command:
```
composer test
```
