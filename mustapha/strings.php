<?php
    /* A strings is any sequence of character 
    wraped in Doubl qoute or single quote */

use function PHPSTORM_META\type;

    $x = "Hello's World";
    $y = "Hello Bizmarrow";
    echo $x . " " . $y;
    echo '<br>';

    // prints the lengths of the text
    echo strlen("Hello World");
    echo '<br>';

    // prints the lengths of a word in te terminal
    echo str_word_count('Emmanuel Bizmarrow');
    echo '<br';

    // prints a string in a reversed other 
    echo strrev('Emmanuel');

    $string = strpos('kadunna  man', 'man');
    $value = 'Muhammedi';

    echo str_replace("world", "Dolly", "Hello world");

    $num = 0x04444;
    echo var_dump($num);

    // Variable Checking Functions in PHP
    $myNum = 5985;
    var_dump(is_int($myNum));

    // checking for finite and infinite Numbers 
    // is_finite();
    // is_infinite();

    $finite_num = 5e445;
    var_dump($finite_num);

    // Not a Number 

    $our_number  = acos(5e445);
    var_dump($our_number);

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

// Php Casting Strings and Floats to Integer 
// Cast float to int
$y = 23465.768;
$int_cast = (int)$y;
echo $int_cast;

echo "\n";

// Cast string to int
$z = "23465.768";
$int_cast = (int)$z;
echo $int_cast;


