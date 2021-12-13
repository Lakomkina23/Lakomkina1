<?php

$numbers = [1,2,3,4,5];

echo $numbers [2];
echo '<br>';

$count = count ($numbers);
for ($i = 0; $i < $count ; $i ++) {
    echo '$i $numbers [$i] <br>';
}

echo '<hr>';

foreach ($numbers as $key => $value) {
    echo '$key; $value <br>';
}


$new_numbers = [];
for ($i =0; $i<10; $i++) {
    $new_numbers []= $i**2;
}

$new_numbers [10] = 100;

echo '<pre>';
print_r ($new_numbers);

$person = [
    'name' => 'Iullia',
    'age' => 37,
    'city'=> 'Moscow'
];

echo $person ['name'];

echo '<pre>';
print_r ($person);


unset ($person ['name']);

echo '<pre>';
print_r ($person);

$colors = ['red', 'green', 'blue'];

$output = '';
foreach ($colors as $color) {
    $output = $output . ' ' . $color;

}


