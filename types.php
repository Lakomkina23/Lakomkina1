<?php

$name = 'Iullia';

echo $name . ' ' . gettype ($name) . ' '. '<br>';

$age = 37;
echo $age . ' ' . gettype ($age) . ' '. '<br>';

$money = 999.99;
echo $money . ' ' . gettype ($money) . ' '. '<br>';

$isRain = true;
echo $isRain . ' ' . gettype ($isRain) . ' '. '<br>';

echo $notExist . ' ' . gettype ($notExist) . ' '. '<br>';

echo '<hr>';

if ($name) {
echo '$name true <br>';
} else {
    echo ' $name false <br>';
}

$emptyString = '';

if ($emptyString) {
echo '$emptyString true <br>';
    } else {
        echo ' $emptyString false <br>';
    }

$zeroString = '0';
if ($zeroString) {
    echo '$zeroString true <br>';
        } else {
            echo ' $zeroString false <br>';
        }


$number = 99;
if ($number) {
    echo '$number true <br>';
        } else {
            echo ' $number false <br>';
        }

 $zero = 0;
 if ($zero) {
    echo '$zero true <br>';
        } else {
            echo ' $zero false <br>';
        }

$false = false;
if ($false) {
    echo '$false true <br>';
        } else {
            echo ' $false false <br>';
        }

        
