<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/* Casting is the conversion of a data type into another data type in a variable.
Casting is done using these statements:
(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL
*/

// Cast to string

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//Casting to integer

$z = 5;       // Integer
$y = 5.34;    // Float
$w = "25 kilometers"; // String
$u = "kilometers 25"; // String
$t = "hello"; // String
$v = true;    // Boolean
$u = NULL;    // NULL

$z = (int) $z;
$y = (int) $y;
$w = (int) $w;
$u = (int) $u;
$t = (int) $t;
$v = (int) $v;
$u = (int) $u;


echo "$z";


// Cast to boolean

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

/*
If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true.

Even -1 converts to true.
*/
    ?>
</body>
</html>