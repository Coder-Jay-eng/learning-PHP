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

echo STATUS_PAID1

?>
</body>
</html>