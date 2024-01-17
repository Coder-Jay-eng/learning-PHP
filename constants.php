<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

// Constants
# Used when we have static data that does not change.

$firstName = 'Joe';
$firstName = 'Gie';

echo $firstName;

// Prints Gie

/*
Constants can be defines using:
define(): 
*/

define("STATUS_PAID", "paid");    #Will print 1

echo defined("STATUS_PAID");   #prints paid

echo STATUS_PAID;

/* Constants can also be defined as;
Using the:
const keyword
*/


/* Variable variables
Allows creation of variables dynamically
*/

$foo = 'bar';
$$foo = 'baz';

# $bar = 'baz';


echo $foo, $bar;  // prints barbaz
echo '$foo, {$$foo}';

const STATUS_PAID1 = "paid";

echo STATUS_PAID1;


/*
const vs. define()

const are always case-sensitive
define() has has a case-insensitive option.
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.
*/

//Magic constants

/*
PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".

These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.

Constant	Description	
__CLASS__	If used inside a class, the class name is returned.	
__DIR__	The directory of the file.	
__FILE__	The file name including the full path.	
__FUNCTION__	If inside a function, the function name is returned.	
__LINE__	The current line number.	
__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
__TRAIT__	If used inside a trait, the trait name is returned.	
ClassName::class	Returns the name of the specified class and the name of the namespace, if any.
*/

echo __DIR__;

class Fruits {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>
</body>
</html>