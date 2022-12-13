<?php

// Create array
    $fruits = ["apple", "oranges", "corn"];
// $fruits[3] = "PINEAPPLE"; 

// Print the whole array 
    // var_dump($fruits) . "<br>";

// Get element by index
// echo "<br>";
// echo $fruits[0];
// Set element by index
// $fruits[3] = "PINEAPPLE"; 
// Check if array has element at index 2
// Append element
// echo $fruits->append("yougut");
// Print the length of the array
    // echo count($fruits);

// Add element at the end of the array
// $remove = array_push($fruits[1]) // add elment at the end of an array

// $cars = ['toyota', 'bmw', 'orange', 'africa'];
// array_push($cars, 'children', 'celebrate Grace');
// print_r($cars); // [1, 2, 3, 4, 5, 8]


// Remove element from the end of the array
    // $remove = ['rice', 'beans', 'corn', 'spagatti'];
    // array_pop($remove);
    // print_r($remove);

// Add element at the beginning of the array
    // $remove = array_unshift($fruits[3]);

    // $addElement = array ('cat', 'dog', 'fowl', 'hen');
    // array_unshift($addElement,"cattle");
    // print_r($addElement);

// Remove element from the beginning of the array
    // $remove = array_shift($fruits);

    // $addElement = array ('cat', 'dog', 'fowl', 'hen');
    // array_shift($addElement);
    // print_r($addElement);

// Split the string into an array
    // $remove = explode("", "Bizmarrow Technologies");
    // original string
	// $OriginalString = "Hello, How can we help you?";
	// Without optional parameter NoOfElements
	// print_r(explode(" ",$OriginalString));
	// // with positive No Of Elements
	// print_r(explode(" ",$OriginalString,4));
	// // with negative NoOfElements
	// print_r(explode(" ",$OriginalString,-1));
    

// Combine array elements into string
    // echo "<br>";
    $arr = array("Today", "is", "very", "Boring");
    // echo join('😋', $arr)."<br>";
    // print_r($arr);
    // echo join('+', $arr)."<br>";
    // echo join('-', $arr)."<br>";
// Check if an element exist in an array element
    // echo isset($arr[0]) . '<br/>';
    // echo in_array("is", $arr);

// Search element index in the array
    // echo array_search("Boring", $arr);
// Merge two arrays
    // print_r(array_merge($fruits, $arr));
// Sorting of array (Reverse order also)

$fruit = array("apple","banana","cashew","date","EggPlant");

// sort($fruit);       //arrange in ascending order
// echo "<pre>";
// print_r($fruit);

// rsort( $fruit);     //sort in descending order
// echo '<pre>';
// print_r($fruit);

// foreach($fruit as $x)
// {
//     echo $x."<br>";
// }

$boy = array("krisha"=>20,"yashvi"=>30,"ritu"=>50,"pinal"=>40);
// asort($boy);       //sort in ascending order according to value
// echo "<pre>";
// print_r($boy);

// ksort($girl);   //sort in ascending order according to key
// echo '<pre>';
// print_r($girl);     

// arsort($boy);      //sort in descending order according to value
// echo '<pre>';
// print_r($boy);

// krsort($boy);      //sort in descending order according to key
// arsort($boy);      
// echo '<pre>';
// print_r($boy);
// print_r($girl);

    
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
    // echo("<br>");
    // $Age = array("peter"=>"35", "Ben"=>"37", "joe"=>"43");
// Get element by key
    // echo "peter is" .$Age['peter']. "years old";
// Set element by key
    // $Age['peter'] = "40";
// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays


// PHP program to creating three
// dimensional array

// Create three nested array
// $myarray = array(
// 	array(
// 		array(1, 2),
// 		array(3, 4),
// 	),
// 	array(
// 		array(5, 6),
// 		array(7, 8),
// 	),
// );
	
// Display the array information
// print_r($myarray);


//   echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

  //Sort Functions For Array.
//   sort() // ascending order array.
//   rsort() // desending order array.
//   asort() // sorting acording to the value.
//   ksort() // asending order according to the key
//   arsort() //desending order according to the value.
//   krsort() // desending order according to the key.

// $holiday = array("monday","Tuesday", "wednesday", "Thursday", "Friday");
// sort($holiday);
// echo ($holiday);
// // $holiday = array("monday","Tuesday", "wednesday", "Thursday", "Friday");
// // rsort($holiday); 
// // $holiday = array("monday","Tuesday", "wednesday", "Thursday", "Friday");
// // asort($holiday);
// // $holiday = array("monday","Tuesday", "wednesday", "Thursday", "Friday");
// // ksort($holiday);
// // $holiday = array("monday","Tuesday", "wednesday", "Thursday", "Friday");
// // arsort($holiday);
// // $holiday = array("monday","Tuesday", "wednesday", "Thursday", "Friday");
// // krsort($holiday);


// Indexed arrays: Indexed array will have numeric index 
// and it will always start with 0 automatically.
// $emp_names = array('Sam','Smith','Jai','Hari');

// Associative arrays: Arrays with named keys.
// $emp_names_ages = array('Sam'=>20, 'Smith'=>36, 'Jai'=>24, 'Hari'=>30);
// echo $emp_names_ages['Sam'] . "<br>";

// Multidimensional arrays: Arrays which has more than one or more arrays.
$PEOPLE = array (
    'Women' => array('Natalia', 'Elena', 'Inga'),
    'Men' => array('Mate', 'Giorgi', 'Zura'),
    'Kids' => array('Nia', 'Sofia', 'Rezi'),

    array(
        'child' => array('Philip', 'Chioma', 'Rexha'),
        'Children' => array('Emma', 'Isaac', 'Micheal'),
        'Siblings' => array('Hope', 'Amaka', 'Vera'),
    ),

    array(
        'Church' => array('Living Faith')
    ),
);

echo($PEOPLE[0]['child'][0]) . '<br>';  
echo($PEOPLE[1]['Church'][0]) . '<br>';
echo ($PEOPLE['Women'][0]);  

## Assesment ##
## create a muti dimention arrays of all 
## of your friends that you have encounter\
// with 




	