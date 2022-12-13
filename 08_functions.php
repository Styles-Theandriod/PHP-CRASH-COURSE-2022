<?php

// Function which prints "Hello I am Zura"
function ebuka (){
    echo
    '<h1>Helllo world</h1>';
}

ebuka();

// Function with argument


function XandY(){
    $y = 50;
    $z = 50;
    $result = $y + $z;
    echo $result;
}

XandY();


// Create sum of two functions

// Create function to sum all numbers using ...$nums

// Arrow functions
// fn(argument) => expression to be returned;
$str = "i am travelling to the village";
$my_function = fn($a) => $str . $a;                                               

echo $my_function('!');
