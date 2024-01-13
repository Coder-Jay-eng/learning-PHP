<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//Strings in php can be enclosed in single or double quotation marks.
 $str1 = "My php string";
 $str2 = 'my php string';

 //Double quote performs action on special characters

echo "This is $str1";   // Will print out This is My php string

//Single quotes print the string as is:

echo 'This is $str2';   // Will print out This is $str2

// You can find the length of a string using the strlen() property.
echo strlen("$str1");

// Word count uses the keyword str_word_count(), strings are 0-based.
echo str_word_count("$str2");

/* Searching for a text within a string, use strpos();
Returns the first position the word is found in a string.
If a match isn't found, it returns false.
The search is case-sensitive
*/

$str3 = 'This is a string and we will be searching the word search'; //Prints 32
$str3 = 'This is a string and we will be Searching the word search'; //Prints 51
echo strpos("$str3", 'search');

?>
</body>
</html>