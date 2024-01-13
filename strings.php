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
 $str1 = "My PHP string";
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

//How to manipulate strings
#To Uppercase, use the strtoupper() keyword.
echo strtoupper("This is $str1");

#To lowercase, use strtolower()
echo strtolower("THIS IS $str2");

#Replace string, use str_replace()
echo str_replace("My", "My new", $str1);
// echo "This is $str1";

#Reverse a string, use strrev()
$str4 = 'Abracadabra';
echo strrev("$str4");

#Remove whitespace: space before or after the actual text, use trim()
$str5 = '    Abra cada brah!   ';
echo trim("$str5");

/*
To convert string to array, use explode()
Explode takes two parameters, ie exlode('param1', 'param2')
The first parameter, the separator, specifies where the action begins in the string.
*/
$str6 = 'Abracadabra Je Berri Jeee Ribashongilo Gashie Shah Kili';
$str7 = explode(" ", "$str6");
#use print_r as you are expecting an array
print_r($str7);

/* String Concatenation 
i) using the period(.)
*/
$str8 = 'This is';
$str9 = 'a concatenated string';
$str10 = $str8 . " " . $str9;
echo "$str10 <br>";


# Using double quotes
echo "$str8 $str9";

?>
</body>
</html>