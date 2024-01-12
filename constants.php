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
$firstName = 'Joe';
$firstName = 'Gie';

echo $firstName;

// Prints Gie

/*
Fuctions can be defines using:
define(): 
*/

define("STATUS_PAID", "paid");    #Will print 1

echo defined("STATUS_PAID");   #prints paid

echo STATUS_PAID;

?>
</body>
</html>