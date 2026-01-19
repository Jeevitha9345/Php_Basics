<!-- String basics -->
<?php
//String->sequence of characters
// Anything inside double quotes " " is a string
// Using String Literal
$s ="Hello\n";
// Anything inside single quotes ' ' is also a string
$s2 = 'Hello World\n ->\n is treated as normal characters....';// \n will be treated as normal characters
// Empty string
$s3 = '';
echo $s;
echo $s2;
echo $s3;

// also prints a string
print "Hello World\n";

// echo → faster, most used
// print → returns 1

// String concatenation->.
$a = "Hello";
$b = "World";
echo $a . " " . $b."\n";

// combining variable and string
$name = "Jeevi";
echo "My name is " . $name."\n";

// double quotes and single quotes
$name = "Jeevi";
echo "Hello $name \n"; // variable works
echo 'Hello $name';
// " " → variable works
// ' ' → variable does NOT work

// In Browser:
echo "Hello<br>World";

// In Console:
echo "\nHello World->\nNew Line Worked!\n";