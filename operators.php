<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /*
    php as a number of operators among them:
Arithmetic operators (+, -, /, *,**, %)
Assignment operators (=, +=, -=, *=, /=)
Comparison operators (==, ===, !==, !=, <>, <=, >=)
Increment/Decrement operators (
    ++$x	Pre-increment	Increments $x by one, then returns $x	
    $x++	Post-increment	Returns $x, then increments $x by one	
    --$x	Pre-decrement	Decrements $x by one, then returns $x	
    $x--    Post-decrement	Returns $x, then decrements $x by one++$x, --$x

)
Logical operators (&&, ||)
String operators (., .=)
Array operators (
    +	Union
    ==	Equality
    ===	Identity
    !=	Inequality
    <>	Inequality
    !==	Non-identity

)
Conditional assignment operators (
    ?:	Ternary
    ??	Null 
)

*/

$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal



$a = 5;  
$b = 10;

echo ($a <=> $b); // returns -1 because $x is less than $y
echo "<br>";

$c = 10;  
$d = 10;

echo ($c <=> $d); // returns 0 because values are equal
echo "<br>";

$e = 15;  
$f = 10;

echo ($e <=> $f); // returns +1 because $x is greater than $y


$m = 100;  
$n = 50;

if ($m == 100 or $n == 80) {
    echo "Hello world!";
}
// prints "Hello world"


 // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>

</body>
</html>