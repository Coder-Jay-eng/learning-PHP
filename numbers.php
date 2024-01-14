<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php    
/* In this file, I'll be learning about numbers in php
There are three main numeric types in PHP:

Integer

some rules around an integer are:
An integer must have at least one digit
An integer must NOT have a decimal point(makes it a float)
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)



Float
Number Strings


php also has:
Infinity
NaN
*/

//  To verify the type of any object in php, use vardump()
$a = 5;
echo var_dump($a); //Returns int(5)

$x = 5985;
var_dump(is_int($x)); //Returns bool(true)

$y = 59.85;
var_dump(is_int($y)); //Returns bool(false)

?>
</body>
</html>