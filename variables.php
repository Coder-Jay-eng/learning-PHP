<!DOCTYPE html>
<html>
<body>

<?php
// A php variable begins with a dollar sign $
$x = 5;
$y = "John";

echo $x;
echo "<br>";
echo $y;

// How to refer to a variable in an output
$txt = "W3Schools.com";
echo "I love " . $txt . "!";


#Data Types in Variables
$x = 5;      // $x is an integer
$y = "John"; // $y is a string
$d = True; //Boolean

/*
php also accepts:
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/


//Get the Data Type in a Variale

$x = 5;
var_dump($x);


// You can use var_dump() to get the data type of a variable i.e 
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

</body>
</html>