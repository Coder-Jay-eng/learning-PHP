<!DOCTYPE html charset='utf-8'>
<html lang="en">
    <title>
        My php code
    </title>
<body>

<h1>My first PHP page</h1>

<?php   #php code begins with this php tag
echo "Hello World!"; //outputs a message "hello world"
//code ends with this tag
/*
The next statement will
print a welcome message
*/
echo "Welcome Home!";
?>      

<p>Using comments to ignore parts of a code line:</p>
 
<?php
$x = 5 /* + 15 */ + 5;
echo $x;
?>

</body>
</html>