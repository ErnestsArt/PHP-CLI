<?php

echo "This is my first CLI script in php";

//izveidot ciklu lai izvadītu skaitļus no 1-10

// for ($x = 0; $x <= 10; $x++) {
//     echo "\n$x";
//   }
// for ($x = 10; $x >= 0; $x--) {
//     echo "\n$x";
// }


//2 uzdevums

$people = [
    $person1,
    [
      'first_name' => 'John',
      'age' => '26'
    ],
    [
      'first_name' => 'Kristaps',
      'age' => '12'
    ],
    [
        'first_name' => 'Kristians',
        'age' => '64'
    ],
  ];
  foreach ($people as $person) {
    echo "First Name: ", $person['first_name'], ", Age: ", $person['age'], "\n";
}