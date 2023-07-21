<?php
require "./carts.php";

//string
// $name = 'Hlaing Min Than';
// $name = "Zaw Zaw";

// //number
// $name = 12; //int
// $name = 12.4; //float


// $age = 100;
// $age = null;

// var_dump($age);




//bolean
// $name = true; //true,false


// //array

// //numeric array
// $names = ['mgmg', 'aung aung', 'kyaw kyaw', 'zaw zaw']; // length - 4 , $names[3]

// // //associated array
// $studentInfo = [
//     'name' => 'Hlaing Min Than',
//     'email' => 'hlaingminthan92@gmail.com'
// ]; //2 , $studentInfo['name]

// //arithmetic -> value
// $total = 1000;

// $total = $total - 1;

// echo $total;
// // $product1 = 1000;
// $product2 = 2000;
// $product3 = 3000;


// $total += $product1; // $total = 1000
// $total += $product3; // $total = 4000

// $value = 10 + 3 - 2 * 4; // ????

// echo $value;

//comparison operator -> boolean
//true , false

// == , === (difference)

// 1000 !== 1000;


// $name = "MgMg";
// $age = 22;

//if else
// case sensitive
// if ($name === "Mgmg" || $age > 22) {
//     echo 'name is mgmg or age is over 22';
// } elseif ($age === 22) {
//     echo 'pass';
// } else {
//     echo "else is running";
// }

// not age

//function declaration

// checkWhoCanDiscount('kyawkyaw', false); // ????


// function checkWhoCanDiscount($name, $isMarried)
// {
//     $person = [
//         'name' => $name,
//         'isMarried' => $isMarried
//     ];

//     if ($person['name'] === 'kyawkyaw' || $person['isMarried']) {
//         echo  $name . ' can get discount<br/>';
//     }
// }

// $checkDiscount('kyawkyaw', true); //undefined
// $checkDiscount =  function ($name, $isMarried) {
//     $person = [
//         'name' => $name,
//         'isMarried' => $isMarried
//     ];

//     if ($person['name'] === 'kyawkyaw' || $person['isMarried']) {
//         echo 'u can get discount<br/>';
//     }
// };

// var_dump($checkDiscount('hlaingminthan', false));

// checkWhoCanDiscount('kyawkyaw', false);

// echo "another line of codes <br/>";
// echo "another line of codes <br/>";
// echo "another line of codes <br/>";


// checkWhoCanDiscount('mgmg', true);

// echo "another line of codes <br/>";
// echo "another line of codes <br/>";
// echo "another line of codes <br/>";


// checkWhoCanDiscount('hlaingminthan', true);


// statement && expression

// $name = 'hlaingminthan'; //statement


// 'hlaingminthan' //expression

// $name = 'hlaingminthan'; //"mgmg"
// $age = 22;

//variable scoping (global,local) why ?????

// function checkDiscount()
// {
//     //
//     global $name;

//     $name = "mgmg";
// }

// checkDiscount();

// if ($name === 'hlaingminthan') {
//     echo 'another line of code is running';
// }

// echo $anotherVar;

// $people = [
//     [
//         'name' => 'kyawkyaw',
//         'isMarried' => true
//     ],
//     [
//         'name' => 'zawzw',
//         'isMarried' => false
//     ],
//     [
//         'name' => 'hlaingminthan',
//         'isMarried' => false
//     ],
// ]; //;

// foreach ($people as $person) {
//     $name = $person['name'];
//     $isMarried = $person['isMarried'];
//     checkWhoCanDiscount($name, $isMarried);
// }


//example ????
