

<?php

$age = 20;
$salary = 300000;

// Sample if
    if($age < 20){
        echo "HAVE A GOOD DAY!!";
    }
// Without circle braces

$age < 20 ? 'hello world' : 'bye';
    
// Sample if-else
    // if($age < 20 && $age > 20){
    //     echo "Have a good birthday";
    // }elseif($age < 50){
    //     echo "i ma cuming home";
    // }else {
    //     echo "have  wonderful night";
    // }
// Difference between == and ===

// if AND
    // &&
// if OR
    // ||
// Ternary if
// ? : ;
// Short ternary
// echo ($result >= 40) ? "Passed" : " Failed";

// Null coalescing operator

// switch
switch($age){
    case 20:
        echo("Good Morning!!");
    break;

    case 20:
        echo("Good Night");
    break;

    default:
    echo("Good Afternoon");
    break;
}