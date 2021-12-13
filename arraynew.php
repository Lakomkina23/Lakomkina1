<?php

$colors = ['red', 'green', 'blue'];

$output = '';
foreach ($colors as $color) {
    $output = $output . ' ' . $color;

}

$string_colors =  implode(' , ', $colors);

echo '$string_colors<br>';

$new_str = 'Предложение из 4 слов';
$array = explode(' ', $new_str);

print_r ($array);


$numbers = [2,4,5,6,1,3];
print_r ($numbers);

sort( $numbers);
print_r ($numbers);

foreach ($numbers as $key => $value) {
    echo '$key; $value <br>';
}
$person = [
    'name' => 'Iullia',
    'age' => 37,
    'city'=> 'Moscow'
];

echo $person ['name'];

echo '<pre>';
print_r ($person);

sort( $numbers);
print_r ($numbers);

asort ($person);
print_r ($person);

echo '<hr>';

$persons = [
 [
     'name' => 'Iullua',
     'age' => 37,
     'city' => 'Moscow'
 ],
 [
    'name' => 'Michelle',
    'age' => 2,
    'city' => 'Moscow'
]
 ];

function sortbyage ($a, $b) {
    if ($a ['age'] > $b ['age']) {
        return 1;
} else if ($a ['age'] < $b ['age']){
    return -1;
} else {
    return 0;
}
}

print_r ($persons);

usort ($persons, 'sortbyage'); 

print_r ($persons); 

echo '<hr>';

$names = array_column ($persons, 'name');

print_r ($names); 

array_multisort ($names, SORT_DESC, $persons);

print_r ($persons); 

$keys = array_keys ($persons);

print_r ($keys);

$values = array_values ($persons);

print_r ($values);
