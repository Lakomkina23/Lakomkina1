<?php

$name = 'Iullia';
$age = 37;
// не дублируй переменные
echo $name;
echo '<br>';
echo $age;
/**
 * 
 * 
 * длинные комменты
 */
echo '<br>';

$name = 'Michelle';

echo $name;

echo '<br>';

$lastName = 'Lakomkina';
$last_name = 'Lakomkina';

$fullname = $name .' '.$lastName;

echo '<br>';

echo $fullname;

$word = 'lower_case';
$word = strtoupper($word);
echo '<br>';
echo $word;

echo '<br>';

$password = 'qwerty ';
echo $password . '!';
echo '<br>';
echo trim($password) . '!';

$number = 5 * 5;
echo '<br>';
echo $number * 2;


/**
 * 2 гамбургера по 4.95
 * 1 коктейль за 1.95
 * 1 кока-кола за 0.85
 * чаевые 16%
 * ндс 7.5%
 */

$burger = 4.95;

echo '<br>';

$coctail = 1.95;

echo '<br>';

$coca = 0.85;

echo '<br>';

$chai = 16;

echo '<br>';

$nalog = 7.5; 

echo '<br>';

$itogo = $burger * 2 + $coctail + $coca;

echo $itogo;

echo '<br>';

$withchai =  $itogo / 100 * $chai;

echo '<br>';

$withnalog =  $itogo / 100 * $nalog;

echo '<br>';

echo $itogo + $withchai +$withnalog;





?>