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
php various types of variable types:
1. Scalar types:
bool
int
float
string

2. Compound types
array
objects
callable
iterable

3. Special type
resource
null
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

// Variable scope
/*
PHP has three types of variable scopes:
local
global
static
*/

// Global scope
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

// Local Scope

// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

function myTest1() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";


/*
Global Keyword
use the word global before a variable to access a global variable inside a function
*/

$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
}

myTest2();
echo $y; // outputs 15


/* PHP also stores variables in an array, $GLOBALS[varName]
The array can be used to update global variables directly from inside functions
*/

$x = 5;
$y = 10;

function myTest3() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest3();
echo $y; // outputs 15


/*
Static keyword
This is used when you do not want the variable to be deleted after a succesful execution(default).
Use the term static before a variable  when first declaring it, to preserve it for later use
*/

function myTest4() {
  static $x = 0; //The variable is still local to the function
  echo $x;
  $x++;
}

myTest4();
myTest4();
myTest4();

?>
</body>
</html>