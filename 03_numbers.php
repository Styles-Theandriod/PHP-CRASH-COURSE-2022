<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
// echo $a + $b * $c . '<br>';
// echo ($a + $b) * $c . '<br>';
// echo $a - $b . '<br>';
// echo $a * $b . '<br>';
// echo $a / $b . '<br>';
// echo $a % $b . '<br>';

// Assignment with math operators
// $a += $b; echo $a.'<br>'; // $a = 9
// $a -= $b; echo $a.'<br>'; // $a = 1
// $a *= $b; echo $a.'<br>'; // $a = 20                                              
// $a /= $b; echo $a.'<br>'; // $a = 1.25
// $a %= $b; echo $a.'<br>'; // $a = 1




   



// // Increment operator
// echo $a++ .'<br>';
// echo ++$a .'<br>';

$value = 10;
// echo $value++; //post increment
// echo $value--; 
// echo ++$value; //pre increment
// echo --$value; //pre Decrement


// // Decrement operator
// echo $a-- .'<br>';
// echo --$a .'<br>';


// // Number checking functions
// echo is_float(4.3); //true which is 1
// echo is_double(2.2); //true which is 1
// echo is_double(5); //false which is empty
// echo is_int(5); //true
// echo is_numeric(3.4); // true
is_numeric("3g.45"); // false


// // Conversion a numeric to interger
$strNumber = '12.34';
// $number = (float)$strNumber;
// $number = (int)$strNumber;
// $number = floatval($strNumber);
$number = intval($strNumber);
echo '<br>';
var_dump($number);

// print($number);



// // Number math functions
echo "abs(-15)" . abs(-15) . '<br>';
echo "pow(2, 3)" . pow(2, 3) . '<br>';
echo "sqrt(16)" . sqrt(16) . '<br>';
echo "max(2, 3)" . max(2, 3) . '<br>';
echo "min(2, 3)" . min(2, 3) . '<br>';
echo "round(2.4)" . round(2.4) . '<br>';
echo "round(2.6)" . round(2.6) . '<br>';
echo "floor(2.6)" . floor(2.6) . '<br>';
echo "ceil(2.17)" . ceil(10.5) . '<br>';
echo "ceil(4.4)" . ceil(4.4) . '<br>';

//  Formatting numbers
$number = 5074.567889;
echo number_format($number, 6, ',', '-');  



// https://www.php.net/manual/en/ref.math.php
